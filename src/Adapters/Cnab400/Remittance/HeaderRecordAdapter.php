<?php

namespace Idez\Cnab\Adapters\Cnab400\Remittance;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class HeaderRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $identificacao_do_arquivo_remessa;
    public $literal_remessa;
    public $codigo_de_servico;
    public $literal_servico;
    public $codigo_da_empresa;
    public $nome_da_empresa;
    public $numero_do_bradesco_na_camara_de_compensacao;
    public $nome_do_banco_por_extenso;
    public $data_da_gravacao_do_arquivo;
    public $branco_01;
    public $identificacao_do_sistema;
    public $numero_sequencial_de_remessa;
    public $branco_02;
    public $sequencial;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->identificacao_do_arquivo_remessa = trim(substr($str, 1, 1));
        $this->literal_remessa = trim(substr($str, 2, 7));
        $this->codigo_de_servico = trim(substr($str, 9, 2));
        $this->literal_servico = trim(substr($str, 11, 15));
        $this->codigo_da_empresa = trim(substr($str, 26, 20));
        $this->nome_da_empresa = trim(substr($str, 46, 30));
        $this->numero_do_bradesco_na_camara_de_compensacao = trim(substr($str, 76, 3));
        $this->nome_do_banco_por_extenso = trim(substr($str, 79, 15));
        $this->data_da_gravacao_do_arquivo = trim(substr($str, 94, 6));
        $this->branco_01 = trim(substr($str, 100, 8));
        $this->identificacao_do_sistema = trim(substr($str, 108, 2));
        $this->numero_sequencial_de_remessa = trim(substr($str, 110, 7));
        $this->branco_02 = trim(substr($str, 117, 277));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
