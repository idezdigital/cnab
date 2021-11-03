<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class SeventhRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->identificacao_do_registro = trim(substr($data, 0, 1));
        $this->endereco_beneficiario_final = trim(substr($data, 1, 45));
        $this->cep = trim(substr($data, 46, 5));
        $this->sufixo_cep = trim(substr($data, 51, 3));
        $this->cidade = trim(substr($data, 54, 20));
        $this->uf = trim(substr($data, 74, 2));
        $this->reserva = trim(substr($data, 76, 290));
        $this->carteira = trim(substr($data, 366, 3));
        $this->agencia = trim(substr($data, 369, 5));
        $this->conta_corrente = trim(substr($data, 374, 7));
        $this->digito_cc = trim(substr($data, 381, 1));
        $this->nosso_numero = trim(substr($data, 382, 11));
        $this->dac_nosso_numero = trim(substr($data, 393, 1));
        $this->numero_sequencial_do_registro = trim(substr($data, 394, 6));
    }
}
