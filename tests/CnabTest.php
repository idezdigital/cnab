<?php

namespace Tests;

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
            file: '',
        );
    }

    public function testCanParseBradescoCnabFile()
    {
        $parsedFile = cnab()->parse(
            type: CnabFile::TYPE_REMITTANCE,
            layout: CnabFile::LAYOUT_400,
            bank: 237,
            file: substr_replace(Str::random(800), '1', 400, 1),
        );

        $this->assertIsArray($parsedFile);
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
