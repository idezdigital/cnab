<?php

namespace Idez\Cnab\Adapters\Cnab400\Remittance;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class SecondRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $mensagem_1;
    public $mensagem_2;
    public $mensagem_3;
    public $mensagem_4;
    public $data_limite_para_concessao_de_desconto_2;
    public $valor_do_desconto_2;
    public $data_limite_para_concessao_de_desconto_3;
    public $valor_do_desconto_3;
    public $reserva;
    public $carteira;
    public $agencia;
    public $conta_corrente;
    public $digito_cc;
    public $nosso_numero;
    public $dac_nosso_numero;
    public $sequencial;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->mensagem_1 = trim(substr($str, 1, 80));
        $this->mensagem_2 = trim(substr($str, 81, 80));
        $this->mensagem_3 = trim(substr($str, 161, 80));
        $this->mensagem_4 = trim(substr($str, 241, 80));
        $this->data_limite_para_concessao_de_desconto_2 = trim(substr($str, 321, 6));
        $this->valor_do_desconto_2 = trim(substr($str, 327, 13));
        $this->data_limite_para_concessao_de_desconto_3 = trim(substr($str, 340, 6));
        $this->valor_do_desconto_3 = trim(substr($str, 346, 13));
        $this->reserva = trim(substr($str, 359, 7));
        $this->carteira = trim(substr($str, 366, 3));
        $this->agencia = trim(substr($str, 369, 5));
        $this->conta_corrente = trim(substr($str, 374, 7));
        $this->digito_cc = trim(substr($str, 381, 1));
        $this->nosso_numero = trim(substr($str, 382, 11));
        $this->dac_nosso_numero = trim(substr($str, 393, 1));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
