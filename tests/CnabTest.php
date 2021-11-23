<?php

namespace Tests;

use Idez\Cnab\Exceptions\InvalidFileException;
use Idez\Cnab\Models\CnabFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class CnabTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function testCantParseInvalidCnabFile()
    {
        $this->expectException(InvalidFileException::class);

        cnab()->parse(
            type: CnabFile::TYPE_REMITTANCE,
            layout: CnabFile::LAYOUT_400,
            bank: 237,
            data: [],
        );
    }

    public function testCanParseRemittanceCnabFile()
    {
        $data = file(__DIR__ . '/../samples/CB060803a.REM', FILE_IGNORE_NEW_LINES);

        $parsedFile = cnab()->parse(
            type: CnabFile::TYPE_REMITTANCE,
            layout: CnabFile::LAYOUT_400,
            bank: 237,
            data: $data,
        );

        $this->assertIsArray($parsedFile);
        $this->assertCount(14, $parsedFile['records']);
        $this->assertInstanceOf(\Idez\Cnab\Adapters\Cnab400\Remittance\HeaderRecordAdapter::class, $parsedFile['records'][0]);
        $this->assertInstanceOf(\Idez\Cnab\Adapters\Cnab400\Remittance\TrailerRecordAdapter::class, end($parsedFile['records']));
    }

    public function testCanParseReturnCnabFile()
    {
        $data = file(__DIR__ . '/../samples/RT20210803.RET', FILE_IGNORE_NEW_LINES);

        $parsedFile = cnab()->parse(
            type: CnabFile::TYPE_RETURN,
            layout: CnabFile::LAYOUT_400,
            bank: 237,
            data: $data,
        );

        $this->assertIsArray($parsedFile);
        $this->assertCount(8, $parsedFile['records']);
        $this->assertInstanceOf(\Idez\Cnab\Adapters\Cnab400\Return\HeaderRecordAdapter::class, $parsedFile['records'][0]);
        $this->assertInstanceOf(\Idez\Cnab\Adapters\Cnab400\Return\TrailerRecordAdapter::class, end($parsedFile['records']));
    }

    public function testCanGenerateReturnCnabFile()
    {
        $data = file(__DIR__ . '/../samples/RT20210803.RET', FILE_IGNORE_NEW_LINES);

        $parsedFile = cnab()->parse(
            type: CnabFile::TYPE_RETURN,
            layout: CnabFile::LAYOUT_400,
            bank: 237,
            data: $data,
        );

        $generatedFile = cnab()->generate(
            type: CnabFile::TYPE_RETURN,
            layout: CnabFile::LAYOUT_400,
            bank: 237,
            records: $parsedFile['records']
        );

        $content = file_get_contents(__DIR__ . '/../samples/RT20210803.RET');

        $this->assertIsArray($generatedFile);
        $this->assertIsString($generatedFile['content']);
        $this->assertEquals($content, $generatedFile['content']);
    }
}
