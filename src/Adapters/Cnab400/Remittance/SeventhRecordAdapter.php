<?php

namespace Idez\Cnab\Adapters\Cnab400\Remittance;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class SeventhRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $endereco_beneficiario_final;
    public $prefixo_cep;
    public $sufixo_cep;
    public $cep;
    public $cidade;
    public $uf;
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
        $this->endereco_beneficiario_final = trim(substr($str, 1, 45));
        $this->prefixo_cep = trim(substr($str, 46, 5));
        $this->sufixo_cep = trim(substr($str, 51, 3));
        $this->cep = $this->prefixo_cep . $this->sufixo_cep;
        $this->cidade = trim(substr($str, 54, 20));
        $this->uf = trim(substr($str, 74, 2));
        $this->reserva = trim(substr($str, 76, 290));
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
