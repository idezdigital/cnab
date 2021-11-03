<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class SecondRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->registro = trim(substr($data, 0, 1));
        $this->mensagem_1 = trim(substr($data, 1, 80));
        $this->mensagem_2 = trim(substr($data, 81, 80));
        $this->mensagem_3 = trim(substr($data, 161, 80));
        $this->mensagem_4 = trim(substr($data, 241, 80));
        $this->data_limite_para_concessao_de_desconto_2 = trim(substr($data, 321, 6));
        $this->valor_do_desconto_2 = trim(substr($data, 327, 13));
        $this->data_limite_para_concessao_de_desconto_3 = trim(substr($data, 340, 6));
        $this->valor_do_desconto_3 = trim(substr($data, 346, 13));
        $this->reserva = trim(substr($data, 359, 7));
        $this->carteira = trim(substr($data, 366, 3));
        $this->agencia = trim(substr($data, 369, 5));
        $this->conta_corrente = trim(substr($data, 374, 7));
        $this->digito_cc = trim(substr($data, 381, 1));
        $this->nosso_numero = trim(substr($data, 382, 11));
        $this->dac_nosso_numero = trim(substr($data, 393, 1));
        $this->sequencial = trim(substr($data, 394, 6));
    }
}
