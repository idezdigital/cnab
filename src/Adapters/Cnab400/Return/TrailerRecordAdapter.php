<?php

namespace Idez\Cnab\Adapters\Cnab400\Return;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class TrailerRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $identificacao_do_retorno;
    public $identificacao_tipo_de_registro;
    public $codigo_do_banco;
    public $brancos;
    public $quantidade_de_titulos_em_cobranca;
    public $valor_total_em_cobranca;
    public $no_do_aviso_bancario;
    public $brancos_2;
    public $quantidade_de_registros_ocorrencia_02_confirmacao_de_entradas;
    public $valor_dos_registros_ocorrencia_02_confirmacao_de_entradas;
    public $valor_dos_registros_ocorrencia_06_liquidacao;
    public $quantidade_dos_registros_ocorrencia_06_liquidacao;
    public $valor_dos_registros_ocorrencia_06;
    public $quantidade_dos_registros_ocorrencia_09_e_10_titulos_baixados;
    public $valor_dos_registros_ocorrencia_09_e_10_titulos_baixados;
    public $quantidade_de_registros_ocorrencia_13_abatimento_cancelado;
    public $valor_dos_registros_ocorrencia_13_abatimento_cancelado;
    public $quantidade_dos_registros_ocorrencia_14_vencimento_alterado;
    public $valor_dos_registros_ocorrencia_14_vencimento_alterado;
    public $quantidade_dos_registros_005_ocorrencia_12_abatimento_concedido;
    public $valor_dos_registros_ocorrencia_012_12_abatimento_concedido;
    public $quantidade_dos_registros_ocorrencia_19_confirmacao_da_instrucao_protesto;
    public $valor_dos_registros_ocorrencia_012_19_confirmacao_da_instrucao_de_protesto;
    public $brancos_3;
    public $valor_total_dos_rateios_015_efetuados;
    public $quantidade_total_dos_rateios_08_efetuados;
    public $brancos_4;
    public $numero_sequencial_do_registro;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->identificacao_do_retorno = trim(substr($str, 1, 1));
        $this->identificacao_tipo_de_registro = trim(substr($str, 2, 2));
        $this->codigo_do_banco = trim(substr($str, 4, 3));
        $this->brancos = trim(substr($str, 7, 10));
        $this->quantidade_de_titulos_em_cobranca = trim(substr($str, 17, 8));
        $this->valor_total_em_cobranca = trim(substr($str, 25, 14));
        $this->no_do_aviso_bancario = trim(substr($str, 39, 8));
        $this->brancos_2 = trim(substr($str, 47, 10));
        $this->quantidade_de_registros_ocorrencia_02_confirmacao_de_entradas = trim(substr($str, 57, 5));
        $this->valor_dos_registros_ocorrencia_02_confirmacao_de_entradas = trim(substr($str, 62, 12));
        $this->valor_dos_registros_ocorrencia_06_liquidacao = trim(substr($str, 74, 12));
        $this->quantidade_dos_registros_ocorrencia_06_liquidacao = trim(substr($str, 86, 5));
        $this->valor_dos_registros_ocorrencia_06 = trim(substr($str, 91, 12));
        $this->quantidade_dos_registros_ocorrencia_09_e_10_titulos_baixados = trim(substr($str, 103, 5));
        $this->valor_dos_registros_ocorrencia_09_e_10_titulos_baixados = trim(substr($str, 108, 12));
        $this->quantidade_de_registros_ocorrencia_13_abatimento_cancelado = trim(substr($str, 120, 5));
        $this->valor_dos_registros_ocorrencia_13_abatimento_cancelado = trim(substr($str, 125, 12));
        $this->quantidade_dos_registros_ocorrencia_14_vencimento_alterado = trim(substr($str, 137, 5));
        $this->valor_dos_registros_ocorrencia_14_vencimento_alterado = trim(substr($str, 142, 12));
        $this->quantidade_dos_registros_005_ocorrencia_12_abatimento_concedido = trim(substr($str, 154, 5));
        $this->valor_dos_registros_ocorrencia_012_12_abatimento_concedido = trim(substr($str, 159, 12));
        $this->quantidade_dos_registros_ocorrencia_19_confirmacao_da_instrucao_protesto = trim(substr($str, 171, 5));
        $this->valor_dos_registros_ocorrencia_012_19_confirmacao_da_instrucao_de_protesto = trim(substr($str, 176, 12));
        $this->brancos_3 = trim(substr($str, 188, 174));
        $this->valor_total_dos_rateios_015_efetuados = trim(substr($str, 362, 15));
        $this->quantidade_total_dos_rateios_08_efetuados = trim(substr($str, 377, 8));
        $this->brancos_4 = trim(substr($str, 385, 9));
        $this->numero_sequencial_do_registro = trim(substr($str, 394, 6));

        return $this;
    }
}
