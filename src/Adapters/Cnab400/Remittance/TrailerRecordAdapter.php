<?php

namespace Idez\Cnab\Adapters\Cnab400\Remittance;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class TrailerRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $branco;
    public $sequencial;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->branco = trim(substr($str, 1, 393));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
