<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class ThirdRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->registro = trim(substr($data, 0, 1));
        $this->id_empresa_no_banco = trim(substr($data, 1, 16));
        $this->id_titulo_no_banco = trim(substr($data, 17, 12));
        $this->codigo_para_calculo_do_rateio = trim(substr($data, 29, 1));
        $this->tipo_de_valor_informado = trim(substr($data, 30, 1));
        $this->filler_1 = trim(substr($data, 31, 12));
        $this->codigo_do_banco_para_credito_do_1o_beneficiario = trim(substr($data, 43, 3));
        $this->codigo_da_agencia_para_credito_do_1o_beneficiario = trim(substr($data, 46, 5));
        $this->digito_da_agencia_para_credito_do_1o_beneficiario = trim(substr($data, 51, 1));
        $this->numero_da_conta_corrente_para_credito_do_1o_beneficiario = trim(substr($data, 52, 12));
        $this->digito_da_conta_corrente_para_credito_do_1o_beneficiario = trim(substr($data, 64, 1));
        $this->valor_ou_percentual_para_rateio_1 = trim(substr($data, 65, 15));
        $this->nome_do_1o_beneficiario = trim(substr($data, 80, 40));
        $this->filler_2 = trim(substr($data, 120, 31));
        $this->parcela_1 = trim(substr($data, 151, 6));
        $this->floating_para_o_1o_beneficiario = trim(substr($data, 157, 3));
        $this->codigo_do_banco_para_credito_do_2o_beneficiario = trim(substr($data, 160, 3));
        $this->codigo_da_agencia_para_credito_do_2o_beneficiario = trim(substr($data, 163, 5));
        $this->digito_da_agencia_para_credito_do_2o_beneficiario = trim(substr($data, 168, 1));
        $this->numero_da_conta_corrente_para_credito_do_2o_beneficiario = trim(substr($data, 169, 12));
        $this->digito_da_conta_corrente_para_credito_do_2o_beneficiario = trim(substr($data, 181, 1));
        $this->valor_ou_percentual_para_rateio_2 = trim(substr($data, 182, 15));
        $this->nome_do_2o_beneficiario = trim(substr($data, 197, 40));
        $this->filler_3 = trim(substr($data, 237, 31));
        $this->parcela_2 = trim(substr($data, 268, 6));
        $this->floating_para_o_2o_beneficiario = trim(substr($data, 274, 3));
        $this->codigo_do_banco_para_credito_do_3o_beneficiario = trim(substr($data, 277, 3));
        $this->codigo_da_agencia_para_credito_do_3o_beneficiario = trim(substr($data, 280, 5));
        $this->digito_da_agencia_para_credito_do_3o_beneficiario = trim(substr($data, 285, 1));
        $this->numero_da_conta_corrente_para_credito_do_3o_beneficiario = trim(substr($data, 286, 12));
        $this->digito_da_conta_corrente_para_credito_do_3o_beneficiario = trim(substr($data, 298, 1));
        $this->valor_ou_percentual_para_rateio_3 = trim(substr($data, 299, 15));
        $this->nome_do_3o_beneficiario = trim(substr($data, 314, 40));
        $this->filler_4 = trim(substr($data, 354, 31));
        $this->parcela_3 = trim(substr($data, 385, 6));
        $this->floating_para_3o_beneficiario = trim(substr($data, 391, 3));
        $this->sequencial = trim(substr($data, 394, 6));
    }
}
