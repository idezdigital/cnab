<?php

namespace Idez\Cnab;

use Idez\Cnab\Exceptions\InvalidFileException;
use Idez\Cnab\Exceptions\InvalidRecordException;
use Idez\Cnab\Exceptions\UnsupportedBankException;
use Idez\Cnab\Exceptions\UnsupportedLayoutException;
use Idez\Cnab\Models\CnabFile;

class Cnab
{
    /**
     * Parse cnab file.
     *
     * @param string $type
     * @param int $layout
     * @param int $bank
     * @param array $data
     * @return array
     * @throws InvalidFileException
     * @throws InvalidRecordException
     * @throws UnsupportedBankException
     * @throws UnsupportedLayoutException
     */
    public function parse(
        string $type,
        int $layout,
        int $bank,
        array $data,
    ): array {
        if ($layout != CnabFile::LAYOUT_400) {
            throw new UnsupportedLayoutException('Unsupported layout.');
        }

        if ($bank != 237) {
            throw new UnsupportedBankException('Unsupported bank.');
        }

        if (count($data) <= 1) {
            throw new InvalidFileException('Invalid file.');
        }

        $records = [];
        foreach ($data as $record) {
            if (strlen($record) < 400) {
                throw new InvalidRecordException('Invalid record.');
            }

            $adapter = match ($type) {
                CnabFile::TYPE_REMITTANCE => match (substr($record, 0, 1)) {
                    '0' => new Adapters\Cnab400\Remittance\HeaderRecordAdapter(),
                    '1' => new Adapters\Cnab400\Remittance\FirstRecordAdapter(),
                    '2' => new Adapters\Cnab400\Remittance\SecondRecordAdapter(),
                    '3' => new Adapters\Cnab400\Remittance\ThirdRecordAdapter(),
                    '6' => new Adapters\Cnab400\Remittance\SixthRecordAdapter(),
                    '7' => new Adapters\Cnab400\Remittance\SeventhRecordAdapter(),
                    '9' => new Adapters\Cnab400\Remittance\TrailerRecordAdapter(),
                },
                CnabFile::TYPE_RETURN => match (substr($record, 0, 1)) {
                    '0' => new Adapters\Cnab400\Return\HeaderRecordAdapter(),
                    '1' => new Adapters\Cnab400\Return\FirstRecordAdapter(),
                    '3' => new Adapters\Cnab400\Return\ThirdRecordAdapter(),
                    '9' => new Adapters\Cnab400\Return\TrailerRecordAdapter(),
                }
            };

            array_push($records, $adapter->fromString($record));
        }

        return [
            'type' => $type,
            'layout' => $layout,
            'bank' => $bank,
            'records' => $records,
        ];
    }

    /**
     * Generate cnab file.
     *
     * @param string $type
     * @param int $layout
     * @param int $bank
     * @param array $data
     * @return array
     * @throws InvalidFileException
     * @throws UnsupportedBankException
     * @throws UnsupportedLayoutException
     */
    public function generate(
        string $type,
        int $layout,
        int $bank,
        array $data
    ): array {
        if ($layout != CnabFile::LAYOUT_400) {
            throw new UnsupportedLayoutException('Unsupported layout.');
        }

        if ($bank != 237) {
            throw new UnsupportedBankException('Unsupported bank.');
        }

        if (count($data) <= 1) {
            throw new InvalidFileException('Invalid file.');
        }

        return [
            'type' => $type,
            'layout' => $layout,
            'bank' => $bank,
            'file' => '',
        ];
    }
}
