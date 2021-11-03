<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class HeaderRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->identificacao_do_registro = trim(substr($data, 0, 1));
        $this->identificacao_do_arquivo_remessa = trim(substr($data, 1, 1));
        $this->literal_remessa = trim(substr($data, 2, 7));
        $this->codigo_de_servico = trim(substr($data, 9, 2));
        $this->literal_servico = trim(substr($data, 11, 15));
        $this->codigo_da_empresa = trim(substr($data, 26, 20));
        $this->nome_da_empresa = trim(substr($data, 46, 30));
        $this->numero_do_bradesco_na_camara_de_compensacao = trim(substr($data, 76, 3));
        $this->nome_do_banco_por_extenso = trim(substr($data, 79, 15));
        $this->data_da_gravacao_do_arquivo = trim(substr($data, 94, 6));
        $this->branco_01 = trim(substr($data, 100, 8));
        $this->identificacao_do_sistema = trim(substr($data, 108, 2));
        $this->numero_sequencial_de_remessa = trim(substr($data, 110, 7));
        $this->branco_02 = trim(substr($data, 117, 277));
        $this->numero_sequencial_do_registro = trim(substr($data, 394, 6));
    }
}
