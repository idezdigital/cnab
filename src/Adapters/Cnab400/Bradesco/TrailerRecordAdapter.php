<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class TrailerRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->registro = trim(substr($data, 0, 1));
        $this->branco = trim(substr($data, 1, 393));
        $this->sequencial = trim(substr($data, 394, 6));
    }
}
