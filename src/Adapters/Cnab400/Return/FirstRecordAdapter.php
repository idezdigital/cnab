<?php

namespace Idez\Cnab\Adapters\Cnab400\Return;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class FirstRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $tipo_de_inscricao_empresa;
    public $no_inscricao_da_empresa;
    public $zeros;
    public $identificacao_da_empresa_beneficiario_no_banco;
    public $no_controle_do_participante;
    public $zeros_2;
    public $identificacao_do_titulo_no_banco;
    public $uso_do_banco;
    public $uso_do_banco_2;
    public $indicador_de_rateio_credito;
    public $pagamento_parcial;
    public $carteira;
    public $identificacao_de_ocorrencia;
    public $data_ocorrencia_no_banco;
    public $numero_do_documento;
    public $identificacao_do_titulo_no_banco_2;
    public $data_vencimento_do_titulo;
    public $valor_do_titulo;
    public $banco_cobrador;
    public $agencia_cobradora;
    public $especie_do_titulo;
    public $despesas_de_cobranca_para_os_codigos_de_ocorrencia;
    public $outras_despesas_013_custas_de_protesto;
    public $juros_operacao_em_atraso;
    public $iof_devido;
    public $abatimento_concedido_sobre_o_titulo;
    public $desconto_concedido;
    public $valor_pago;
    public $juros_de_mora;
    public $outros_creditos;
    public $brancos;
    public $motivo_do_codigo_de_ocorrencia;
    public $data_do_credito;
    public $origem_pagamento;
    public $brancos_2;
    public $codigo_do_banco;
    public $motivos_das_rejeicoes_para_os_codigos_de_ocorrencia;
    public $brancos_3;
    public $numero_do_cartorio;
    public $numero_do_protocolo;
    public $brancos_4;
    public $sequencial;

    public function __toString()
    {
        return str_pad($this->registro, 1) .
            str_pad($this->tipo_de_inscricao_empresa, 2) .
            str_pad($this->no_inscricao_da_empresa, 14) .
            str_pad($this->zeros, 3) .
            str_pad($this->identificacao_da_empresa_beneficiario_no_banco, 17) .
            str_pad($this->no_controle_do_participante, 25) .
            str_pad($this->zeros_2, 8) .
            str_pad($this->identificacao_do_titulo_no_banco, 12) .
            str_pad($this->uso_do_banco, 10) .
            str_pad($this->uso_do_banco_2, 12) .
            str_pad($this->indicador_de_rateio_credito, 1) .
            str_pad($this->pagamento_parcial, 2) .
            str_pad($this->carteira, 1) .
            str_pad($this->identificacao_de_ocorrencia, 2) .
            str_pad($this->data_ocorrencia_no_banco, 6) .
            str_pad($this->numero_do_documento, 10) .
            str_pad($this->identificacao_do_titulo_no_banco_2, 20) .
            str_pad($this->data_vencimento_do_titulo, 6) .
            str_pad($this->valor_do_titulo, 13) .
            str_pad($this->banco_cobrador, 3) .
            str_pad($this->agencia_cobradora, 5) .
            str_pad($this->especie_do_titulo, 2) .
            str_pad($this->despesas_de_cobranca_para_os_codigos_de_ocorrencia, 13) .
            str_pad($this->outras_despesas_013_custas_de_protesto, 13) .
            str_pad($this->juros_operacao_em_atraso, 13) .
            str_pad($this->iof_devido, 13) .
            str_pad($this->abatimento_concedido_sobre_o_titulo, 13) .
            str_pad($this->desconto_concedido, 13) .
            str_pad($this->valor_pago, 13) .
            str_pad($this->juros_de_mora, 13) .
            str_pad($this->outros_creditos, 13) .
            str_pad($this->brancos, 2) .
            str_pad($this->motivo_do_codigo_de_ocorrencia, 1) .
            str_pad($this->data_do_credito, 6) .
            str_pad($this->origem_pagamento, 3) .
            str_pad($this->brancos_2, 10) .
            str_pad($this->codigo_do_banco, 4) .
            str_pad($this->motivos_das_rejeicoes_para_os_codigos_de_ocorrencia, 10) .
            str_pad($this->brancos_3, 40) .
            str_pad($this->numero_do_cartorio, 2) .
            str_pad($this->numero_do_protocolo, 10) .
            str_pad($this->brancos_4, 14) .
            str_pad($this->sequencial, 6);
    }

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->tipo_de_inscricao_empresa = trim(substr($str, 1, 2));
        $this->no_inscricao_da_empresa = trim(substr($str, 3, 14));
        $this->zeros = trim(substr($str, 17, 3));
        $this->identificacao_da_empresa_beneficiario_no_banco = trim(substr($str, 20, 17));
        $this->no_controle_do_participante = trim(substr($str, 37, 25));
        $this->zeros_2 = trim(substr($str, 62, 8));
        $this->identificacao_do_titulo_no_banco = trim(substr($str, 70, 12));
        $this->uso_do_banco = trim(substr($str, 82, 10));
        $this->uso_do_banco_2 = trim(substr($str, 92, 12));
        $this->indicador_de_rateio_credito = trim(substr($str, 104, 1));
        $this->pagamento_parcial = trim(substr($str, 105, 2));
        $this->carteira = trim(substr($str, 107, 1));
        $this->identificacao_de_ocorrencia = trim(substr($str, 108, 2));
        $this->data_ocorrencia_no_banco = trim(substr($str, 110, 6));
        $this->numero_do_documento = trim(substr($str, 116, 10));
        $this->identificacao_do_titulo_no_banco_2 = trim(substr($str, 126, 20));
        $this->data_vencimento_do_titulo = trim(substr($str, 146, 6));
        $this->valor_do_titulo = trim(substr($str, 152, 13));
        $this->banco_cobrador = trim(substr($str, 165, 3));
        $this->agencia_cobradora = trim(substr($str, 168, 5));
        $this->especie_do_titulo = trim(substr($str, 173, 2));
        $this->despesas_de_cobranca_para_os_codigos_de_ocorrencia = trim(substr($str, 175, 13));
        $this->outras_despesas_013_custas_de_protesto = trim(substr($str, 188, 13));
        $this->juros_operacao_em_atraso = trim(substr($str, 201, 13));
        $this->iof_devido = trim(substr($str, 214, 13));
        $this->abatimento_concedido_sobre_o_titulo = trim(substr($str, 227, 13));
        $this->desconto_concedido = trim(substr($str, 240, 13));
        $this->valor_pago = trim(substr($str, 253, 13));
        $this->juros_de_mora = trim(substr($str, 266, 13));
        $this->outros_creditos = trim(substr($str, 279, 13));
        $this->brancos = trim(substr($str, 292, 2));
        $this->motivo_do_codigo_de_ocorrencia = trim(substr($str, 294, 1));
        $this->data_do_credito = trim(substr($str, 295, 6));
        $this->origem_pagamento = trim(substr($str, 301, 3));
        $this->brancos_2 = trim(substr($str, 304, 10));
        $this->codigo_do_banco = trim(substr($str, 314, 4));
        $this->motivos_das_rejeicoes_para_os_codigos_de_ocorrencia = trim(substr($str, 318, 10));
        $this->brancos_3 = trim(substr($str, 328, 40));
        $this->numero_do_cartorio = trim(substr($str, 368, 2));
        $this->numero_do_protocolo = trim(substr($str, 370, 10));
        $this->brancos_4 = trim(substr($str, 380, 14));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
