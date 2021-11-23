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
    public $no_sequencial_de_registro;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->tipo_de_inscricao_empresa = trim(substr($str, 0, 1));
        $this->no_inscricao_da_empresa = trim(substr($str, 0, 1));
        $this->zeros = trim(substr($str, 0, 1));
        $this->identificacao_da_empresa_beneficiario_no_banco = trim(substr($str, 0, 1));
        $this->no_controle_do_participante = trim(substr($str, 0, 1));
        $this->zeros_2 = trim(substr($str, 0, 1));
        $this->identificacao_do_titulo_no_banco = trim(substr($str, 0, 1));
        $this->uso_do_banco = trim(substr($str, 0, 1));
        $this->uso_do_banco_2 = trim(substr($str, 0, 1));
        $this->indicador_de_rateio_credito = trim(substr($str, 0, 1));
        $this->pagamento_parcial = trim(substr($str, 0, 1));
        $this->carteira = trim(substr($str, 0, 1));
        $this->identificacao_de_ocorrencia = trim(substr($str, 0, 1));
        $this->data_ocorrencia_no_banco = trim(substr($str, 0, 1));
        $this->numero_do_documento = trim(substr($str, 0, 1));
        $this->identificacao_do_titulo_no_banco_2 = trim(substr($str, 0, 1));
        $this->data_vencimento_do_titulo = trim(substr($str, 0, 1));
        $this->valor_do_titulo = trim(substr($str, 0, 1));
        $this->banco_cobrador = trim(substr($str, 0, 1));
        $this->agencia_cobradora = trim(substr($str, 0, 1));
        $this->especie_do_titulo = trim(substr($str, 0, 1));
        $this->despesas_de_cobranca_para_os_codigos_de_ocorrencia = trim(substr($str, 0, 1));
        $this->outras_despesas_013_custas_de_protesto = trim(substr($str, 0, 1));
        $this->juros_operacao_em_atraso = trim(substr($str, 0, 1));
        $this->iof_devido = trim(substr($str, 0, 1));
        $this->abatimento_concedido_sobre_o_titulo = trim(substr($str, 0, 1));
        $this->desconto_concedido = trim(substr($str, 0, 1));
        $this->valor_pago = trim(substr($str, 0, 1));
        $this->juros_de_mora = trim(substr($str, 0, 1));
        $this->outros_creditos = trim(substr($str, 0, 1));
        $this->brancos = trim(substr($str, 0, 1));
        $this->motivo_do_codigo_de_ocorrencia = trim(substr($str, 0, 1));
        $this->data_do_credito = trim(substr($str, 0, 1));
        $this->origem_pagamento = trim(substr($str, 0, 1));
        $this->brancos_2 = trim(substr($str, 0, 1));
        $this->codigo_do_banco = trim(substr($str, 0, 1));
        $this->motivos_das_rejeicoes_para_os_codigos_de_ocorrencia = trim(substr($str, 0, 1));
        $this->brancos_3 = trim(substr($str, 0, 1));
        $this->numero_do_cartorio = trim(substr($str, 0, 1));
        $this->numero_do_protocolo = trim(substr($str, 0, 1));
        $this->brancos_4 = trim(substr($str, 0, 1));
        $this->no_sequencial_de_registro = trim(substr($str, 0, 1));

        return $this;
    }
}
