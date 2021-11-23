<?php

namespace Idez\Cnab\Adapters\Cnab400\Remittance;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class ThirdRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $id_empresa_no_banco;
    public $id_titulo_no_banco;
    public $codigo_para_calculo_do_rateio;
    public $tipo_de_valor_informado;
    public $filler_1;
    public $codigo_do_banco_para_credito_do_1o_beneficiario;
    public $codigo_da_agencia_para_credito_do_1o_beneficiario;
    public $digito_da_agencia_para_credito_do_1o_beneficiario;
    public $numero_da_conta_corrente_para_credito_do_1o_beneficiario;
    public $digito_da_conta_corrente_para_credito_do_1o_beneficiario;
    public $valor_ou_percentual_para_rateio_1;
    public $nome_do_1o_beneficiario;
    public $filler_2;
    public $parcela_1;
    public $floating_para_o_1o_beneficiario;
    public $codigo_do_banco_para_credito_do_2o_beneficiario;
    public $codigo_da_agencia_para_credito_do_2o_beneficiario;
    public $digito_da_agencia_para_credito_do_2o_beneficiario;
    public $numero_da_conta_corrente_para_credito_do_2o_beneficiario;
    public $digito_da_conta_corrente_para_credito_do_2o_beneficiario;
    public $valor_ou_percentual_para_rateio_2;
    public $nome_do_2o_beneficiario;
    public $filler_3;
    public $parcela_2;
    public $floating_para_o_2o_beneficiario;
    public $codigo_do_banco_para_credito_do_3o_beneficiario;
    public $codigo_da_agencia_para_credito_do_3o_beneficiario;
    public $digito_da_agencia_para_credito_do_3o_beneficiario;
    public $numero_da_conta_corrente_para_credito_do_3o_beneficiario;
    public $digito_da_conta_corrente_para_credito_do_3o_beneficiario;
    public $valor_ou_percentual_para_rateio_3;
    public $nome_do_3o_beneficiario;
    public $filler_4;
    public $parcela_3;
    public $floating_para_3o_beneficiario;
    public $sequencial;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->id_empresa_no_banco = trim(substr($str, 1, 16));
        $this->id_titulo_no_banco = trim(substr($str, 17, 12));
        $this->codigo_para_calculo_do_rateio = trim(substr($str, 29, 1));
        $this->tipo_de_valor_informado = trim(substr($str, 30, 1));
        $this->filler_1 = trim(substr($str, 31, 12));
        $this->codigo_do_banco_para_credito_do_1o_beneficiario = trim(substr($str, 43, 3));
        $this->codigo_da_agencia_para_credito_do_1o_beneficiario = trim(substr($str, 46, 5));
        $this->digito_da_agencia_para_credito_do_1o_beneficiario = trim(substr($str, 51, 1));
        $this->numero_da_conta_corrente_para_credito_do_1o_beneficiario = trim(substr($str, 52, 12));
        $this->digito_da_conta_corrente_para_credito_do_1o_beneficiario = trim(substr($str, 64, 1));
        $this->valor_ou_percentual_para_rateio_1 = trim(substr($str, 65, 15));
        $this->nome_do_1o_beneficiario = trim(substr($str, 80, 40));
        $this->filler_2 = trim(substr($str, 120, 31));
        $this->parcela_1 = trim(substr($str, 151, 6));
        $this->floating_para_o_1o_beneficiario = trim(substr($str, 157, 3));
        $this->codigo_do_banco_para_credito_do_2o_beneficiario = trim(substr($str, 160, 3));
        $this->codigo_da_agencia_para_credito_do_2o_beneficiario = trim(substr($str, 163, 5));
        $this->digito_da_agencia_para_credito_do_2o_beneficiario = trim(substr($str, 168, 1));
        $this->numero_da_conta_corrente_para_credito_do_2o_beneficiario = trim(substr($str, 169, 12));
        $this->digito_da_conta_corrente_para_credito_do_2o_beneficiario = trim(substr($str, 181, 1));
        $this->valor_ou_percentual_para_rateio_2 = trim(substr($str, 182, 15));
        $this->nome_do_2o_beneficiario = trim(substr($str, 197, 40));
        $this->filler_3 = trim(substr($str, 237, 31));
        $this->parcela_2 = trim(substr($str, 268, 6));
        $this->floating_para_o_2o_beneficiario = trim(substr($str, 274, 3));
        $this->codigo_do_banco_para_credito_do_3o_beneficiario = trim(substr($str, 277, 3));
        $this->codigo_da_agencia_para_credito_do_3o_beneficiario = trim(substr($str, 280, 5));
        $this->digito_da_agencia_para_credito_do_3o_beneficiario = trim(substr($str, 285, 1));
        $this->numero_da_conta_corrente_para_credito_do_3o_beneficiario = trim(substr($str, 286, 12));
        $this->digito_da_conta_corrente_para_credito_do_3o_beneficiario = trim(substr($str, 298, 1));
        $this->valor_ou_percentual_para_rateio_3 = trim(substr($str, 299, 15));
        $this->nome_do_3o_beneficiario = trim(substr($str, 314, 40));
        $this->filler_4 = trim(substr($str, 354, 31));
        $this->parcela_3 = trim(substr($str, 385, 6));
        $this->floating_para_3o_beneficiario = trim(substr($str, 391, 3));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
