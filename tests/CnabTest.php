<?php

namespace Tests;

use Idez\Cnab\Adapters\Cnab400\Bradesco\HeaderRecordAdapter;
use Idez\Cnab\Adapters\Cnab400\Bradesco\TrailerRecordAdapter;
use Idez\Cnab\Exceptions\InvalidFileException;
use Idez\Cnab\Models\CnabFile;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;

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

    public function testCanParseBradescoCnabFile()
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
        $this->assertInstanceOf(HeaderRecordAdapter::class, $parsedFile['records'][0]);
        $this->assertInstanceOf(TrailerRecordAdapter::class, end($parsedFile['records']));
    }

    public function testCanGenerateBradescoCnabFile()
    {
        $data = [];

        $cnabFile = cnab()->generate(
            type: CnabFile::TYPE_RETURN,
            layout: CnabFile::LAYOUT_400,
            bank: 237,
            data: $data
        );

        $this->assertIsArray($cnabFile);
    }
}
