<?php

namespace Idez\Cnab\Adapters\Cnab400\Return;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class ThirdRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $id_empresa_no_banco;
    public $id_titulo_no_banco;
    public $codigo_de_calculo_do_rateio;
    public $tipo_de_valor_informado;
    public $filler;
    public $codigo_do_banco_para_credito_do_1o_beneficiario;
    public $codigo_da_agencia_para_credito_do_1o_beneficiario;
    public $digito_da_agencia_para_credito_do_1o_beneficiario;
    public $numero_da_conta_corrente_para_credito_do_1o_beneficiario;
    public $digito_da_conta_corrente_para_credito_do_1o_beneficiario;
    public $valor_efetivo_do_rateio_quando_do_pagamento;
    public $nome_do_1o_beneficiario;
    public $filler_2;
    public $parcela;
    public $floating_para_o_1o_beneficiario;
    public $data_do_credito_para_o_1o_beneficiario;
    public $status_ou_motivo_da_ocorrencia_de_rateio;
    public $codigo_do_banco_para_credito_do_2o_beneficiario_quando_do_pagamento;
    public $codigo_da_agencia_para_credito_do_2o_beneficiario;
    public $digito_da_agencia_para_credito_do_2o_beneficiario;
    public $numero_da_conta_corrente_para_credito_do_2o_beneficiario;
    public $digito_da_conta_corrente_para_credito_do_2o_beneficiario;
    public $valor_efetivo_do_rateio_quando_do_pagamento_2;
    public $nome_do_2o_beneficiario;
    public $filler_3;
    public $parcela_2;
    public $floating_para_2o_beneficiario;
    public $data_do_credito_para_o_2o_beneficiario_quando_do_pagamento;
    public $status_ou_motivo_da_ocorrencia_de_rateio_2;
    public $codigo_do_banco_para_credito_do_3o_beneficiario;
    public $codigo_da_agencia_para_credito_do_3o_beneficiario;
    public $digito_da_agencia_para_credito_do_3o_beneficiario;
    public $numero_da_conta_para_credito_do_3o_beneficiario;
    public $digito_da_conta_para_credito_do_3o_beneficiario;
    public $valor_efetivo_do_rateio_quando_do_pagamento_3;
    public $nome_do_3o_beneficiario;
    public $filler_4;
    public $parcela_3;
    public $floating_para_o_3o_beneficiario;
    public $data_do_credito_para_o_3o_beneficiario_quando_do_pagamento;
    public $status_ou_motivo_da_ocorrencia_de_rateio_3;
    public $sequencial;

    public function __toString()
    {
        return str_pad($this->registro, 1) .
            str_pad($this->id_empresa_no_banco, 16) .
            str_pad($this->id_titulo_no_banco, 12) .
            str_pad($this->codigo_de_calculo_do_rateio, 1) .
            str_pad($this->tipo_de_valor_informado, 1) .
            str_pad($this->filler, 12) .
            str_pad($this->codigo_do_banco_para_credito_do_1o_beneficiario, 3) .
            str_pad($this->codigo_da_agencia_para_credito_do_1o_beneficiario, 5) .
            str_pad($this->digito_da_agencia_para_credito_do_1o_beneficiario, 1) .
            str_pad($this->numero_da_conta_corrente_para_credito_do_1o_beneficiario, 12) .
            str_pad($this->digito_da_conta_corrente_para_credito_do_1o_beneficiario, 1) .
            str_pad($this->valor_efetivo_do_rateio_quando_do_pagamento, 15) .
            str_pad($this->nome_do_1o_beneficiario, 40) .
            str_pad($this->filler_2, 21) .
            str_pad($this->parcela, 6) .
            str_pad($this->floating_para_o_1o_beneficiario, 3) .
            str_pad($this->data_do_credito_para_o_1o_beneficiario, 8) .
            str_pad($this->status_ou_motivo_da_ocorrencia_de_rateio, 2) .
            str_pad($this->codigo_do_banco_para_credito_do_2o_beneficiario_quando_do_pagamento, 3) .
            str_pad($this->codigo_da_agencia_para_credito_do_2o_beneficiario, 5) .
            str_pad($this->digito_da_agencia_para_credito_do_2o_beneficiario, 1) .
            str_pad($this->numero_da_conta_corrente_para_credito_do_2o_beneficiario, 12) .
            str_pad($this->digito_da_conta_corrente_para_credito_do_2o_beneficiario, 1) .
            str_pad($this->valor_efetivo_do_rateio_quando_do_pagamento_2, 15) .
            str_pad($this->nome_do_2o_beneficiario, 40) .
            str_pad($this->filler_3, 21) .
            str_pad($this->parcela_2, 6) .
            str_pad($this->floating_para_2o_beneficiario, 3) .
            str_pad($this->data_do_credito_para_o_2o_beneficiario_quando_do_pagamento, 8) .
            str_pad($this->status_ou_motivo_da_ocorrencia_de_rateio_2, 2) .
            str_pad($this->codigo_do_banco_para_credito_do_3o_beneficiario, 3) .
            str_pad($this->codigo_da_agencia_para_credito_do_3o_beneficiario, 5) .
            str_pad($this->digito_da_agencia_para_credito_do_3o_beneficiario, 1) .
            str_pad($this->numero_da_conta_para_credito_do_3o_beneficiario, 12) .
            str_pad($this->digito_da_conta_para_credito_do_3o_beneficiario, 1) .
            str_pad($this->valor_efetivo_do_rateio_quando_do_pagamento_3, 15) .
            str_pad($this->nome_do_3o_beneficiario, 40) .
            str_pad($this->filler_4, 21) .
            str_pad($this->parcela_3, 6) .
            str_pad($this->floating_para_o_3o_beneficiario, 3) .
            str_pad($this->data_do_credito_para_o_3o_beneficiario_quando_do_pagamento, 8) .
            str_pad($this->status_ou_motivo_da_ocorrencia_de_rateio_3, 2) .
            str_pad($this->sequencial, 6);
    }

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->id_empresa_no_banco = trim(substr($str, 1, 16));
        $this->id_titulo_no_banco = trim(substr($str, 17, 12));
        $this->codigo_de_calculo_do_rateio = trim(substr($str, 29, 1));
        $this->tipo_de_valor_informado = trim(substr($str, 30, 1));
        $this->filler = trim(substr($str, 31, 12));
        $this->codigo_do_banco_para_credito_do_1o_beneficiario = trim(substr($str, 43, 3));
        $this->codigo_da_agencia_para_credito_do_1o_beneficiario = trim(substr($str, 46, 5));
        $this->digito_da_agencia_para_credito_do_1o_beneficiario = trim(substr($str, 51, 1));
        $this->numero_da_conta_corrente_para_credito_do_1o_beneficiario = trim(substr($str, 52, 12));
        $this->digito_da_conta_corrente_para_credito_do_1o_beneficiario = trim(substr($str, 64, 1));
        $this->valor_efetivo_do_rateio_quando_do_pagamento = trim(substr($str, 65, 15));
        $this->nome_do_1o_beneficiario = trim(substr($str, 80, 40));
        $this->filler_2 = trim(substr($str, 120, 21));
        $this->parcela = trim(substr($str, 141, 6));
        $this->floating_para_o_1o_beneficiario = trim(substr($str, 147, 3));
        $this->data_do_credito_para_o_1o_beneficiario = trim(substr($str, 150, 8));
        $this->status_ou_motivo_da_ocorrencia_de_rateio = trim(substr($str, 158, 2));
        $this->codigo_do_banco_para_credito_do_2o_beneficiario_quando_do_pagamento = trim(substr($str, 160, 3));
        $this->codigo_da_agencia_para_credito_do_2o_beneficiario = trim(substr($str, 163, 5));
        $this->digito_da_agencia_para_credito_do_2o_beneficiario = trim(substr($str, 168, 1));
        $this->numero_da_conta_corrente_para_credito_do_2o_beneficiario = trim(substr($str, 169, 12));
        $this->digito_da_conta_corrente_para_credito_do_2o_beneficiario = trim(substr($str, 181, 1));
        $this->valor_efetivo_do_rateio_quando_do_pagamento_2 = trim(substr($str, 182, 15));
        $this->nome_do_2o_beneficiario = trim(substr($str, 197, 40));
        $this->filler_3 = trim(substr($str, 237, 21));
        $this->parcela_2 = trim(substr($str, 258, 6));
        $this->floating_para_2o_beneficiario = trim(substr($str, 264, 3));
        $this->data_do_credito_para_o_2o_beneficiario_quando_do_pagamento = trim(substr($str, 267, 8));
        $this->status_ou_motivo_da_ocorrencia_de_rateio_2 = trim(substr($str, 275, 2));
        $this->codigo_do_banco_para_credito_do_3o_beneficiario = trim(substr($str, 277, 3));
        $this->codigo_da_agencia_para_credito_do_3o_beneficiario = trim(substr($str, 280, 5));
        $this->digito_da_agencia_para_credito_do_3o_beneficiario = trim(substr($str, 285, 1));
        $this->numero_da_conta_para_credito_do_3o_beneficiario = trim(substr($str, 286, 12));
        $this->digito_da_conta_para_credito_do_3o_beneficiario = trim(substr($str, 298, 1));
        $this->valor_efetivo_do_rateio_quando_do_pagamento_3 = trim(substr($str, 299, 15));
        $this->nome_do_3o_beneficiario = trim(substr($str, 314, 40));
        $this->filler_4 = trim(substr($str, 354, 21));
        $this->parcela_3 = trim(substr($str, 375, 6));
        $this->floating_para_o_3o_beneficiario = trim(substr($str, 381, 3));
        $this->data_do_credito_para_o_3o_beneficiario_quando_do_pagamento = trim(substr($str, 384, 8));
        $this->status_ou_motivo_da_ocorrencia_de_rateio_3 = trim(substr($str, 392, 2));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
