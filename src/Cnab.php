<?php

namespace Idez\Cnab;

use Idez\Cnab\Adapters\Cnab400\Bradesco\FirstRecordAdapter;
use Idez\Cnab\Adapters\Cnab400\Bradesco\HeaderRecordAdapter;
use Idez\Cnab\Adapters\Cnab400\Bradesco\SecondRecordAdapter;
use Idez\Cnab\Adapters\Cnab400\Bradesco\SeventhRecordAdapter;
use Idez\Cnab\Adapters\Cnab400\Bradesco\SixthRecordAdapter;
use Idez\Cnab\Adapters\Cnab400\Bradesco\ThirdRecordAdapter;
use Idez\Cnab\Adapters\Cnab400\Bradesco\TrailerRecordAdapter;
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
     * @return array
     */
    public function parse(
        string $type,
        int $layout,
        int $bank,
        array $data,
    ): array {
        if (! in_array($layout, [CnabFile::LAYOUT_400])) {
            throw new UnsupportedLayoutException('Unsupported layout.');
        }

        if (! in_array($bank, [237])) {
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

            switch (substr($record, 0, 1)) {
                case '0':
                    array_push($records, new HeaderRecordAdapter($record));

                    break;
                case '1':
                    array_push($records, new FirstRecordAdapter($record));

                    break;
                case '2':
                    array_push($records, new SecondRecordAdapter($record));

                    break;
                case '3':
                    array_push($records, new ThirdRecordAdapter($record));

                    break;
                case '6':
                    array_push($records, new SixthRecordAdapter($record));

                    break;
                case '7':
                    array_push($records, new SeventhRecordAdapter($record));

                    break;
                case '9':
                    array_push($records, new TrailerRecordAdapter($record));

                    break;
            }
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
     * @return mixed
     */
    public function generate(
        string $type,
        int $layout,
        int $bank,
        array $data
    ): mixed {
        return [];
    }
}
