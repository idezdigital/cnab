<?php

namespace Idez\Cnab\Adapters\Cnab400\Return;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class HeaderRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $identificacao_do_arquivo_retorno;
    public $literal_retorno;
    public $codigo_de_servico;
    public $literal_servico;
    public $codigo_da_empresa;
    public $nome_da_empresa;
    public $numero_do_bradesco_na_camara_de_compensacao;
    public $nome_do_banco_por_extenso;
    public $data_da_gravacao_do_arquivo;
    public $densidade_de_gravacao;
    public $numero_aviso_bancario;
    public $branco;
    public $data_do_credito;
    public $branco_02;
    public $sequencial;

    public function __toString()
    {
        return str_pad($this->registro, 1) .
            str_pad($this->identificacao_do_arquivo_retorno, 1) .
            str_pad($this->literal_retorno, 7) .
            str_pad($this->codigo_de_servico, 2) .
            str_pad($this->literal_servico, 15) .
            str_pad($this->codigo_da_empresa, 20) .
            str_pad($this->nome_da_empresa, 30) .
            str_pad($this->numero_do_bradesco_na_camara_de_compensacao, 3) .
            str_pad($this->nome_do_banco_por_extenso, 15) .
            str_pad($this->data_da_gravacao_do_arquivo, 6) .
            str_pad($this->densidade_de_gravacao, 8) .
            str_pad($this->numero_aviso_bancario, 5) .
            str_pad($this->branco, 266) .
            str_pad($this->data_do_credito, 6) .
            str_pad($this->branco_02, 9) .
            str_pad($this->sequencial, 6);
    }

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->identificacao_do_arquivo_retorno = trim(substr($str, 1, 1));
        $this->literal_retorno = trim(substr($str, 2, 7));
        $this->codigo_de_servico = trim(substr($str, 9, 2));
        $this->literal_servico = trim(substr($str, 11, 15));
        $this->codigo_da_empresa = trim(substr($str, 26, 20));
        $this->nome_da_empresa = trim(substr($str, 46, 30));
        $this->numero_do_bradesco_na_camara_de_compensacao = trim(substr($str, 76, 3));
        $this->nome_do_banco_por_extenso = trim(substr($str, 79, 15));
        $this->data_da_gravacao_do_arquivo = trim(substr($str, 94, 6));
        $this->densidade_de_gravacao = trim(substr($str, 100, 8));
        $this->numero_aviso_bancario = trim(substr($str, 108, 5));
        $this->branco = trim(substr($str, 113, 266));
        $this->data_do_credito = trim(substr($str, 379, 6));
        $this->branco_02 = trim(substr($str, 385, 9));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
