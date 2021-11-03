<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class FirstRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->identificacao_do_registro = trim(substr($data, 0, 1));
        $this->agencia_de_debito_opcional = trim(substr($data, 1, 5));
        $this->digito_da_agencia_de_debito_opcional = trim(substr($data, 6, 1));
        $this->razao_da_conta_corrente_opcional = trim(substr($data, 7, 5));
        $this->conta_corrente_opcional = trim(substr($data, 12, 7));
        $this->digito_da_conta_corrente_opcional = trim(substr($data, 19, 1));
        $this->identificacao_da_empresa_beneficiaria_no_banco = trim(substr($data, 20, 17));
        $this->numero_controle_do_participante = trim(substr($data, 37, 25));
        $this->codigo_do_banco_a_ser_debitado_na_camara_de_compensacao = trim(substr($data, 62, 3));
        $this->campo_de_multa = trim(substr($data, 65, 1));
        $this->percentual_de_multa = trim(substr($data, 66, 4));
        $this->identificacao_do_titulo_no_banco = trim(substr($data, 70, 11));
        $this->digito_de_autoconferencia_do_numero_bancario = trim(substr($data, 81, 1));
        $this->desconto_bonificacao_por_dia = trim(substr($data, 82, 10));
        $this->condicao_para_emissao_da_papeleta_de_cobranca = trim(substr($data, 92, 1));
        $this->ident_se_emite_boleto_para_debito_automatico = trim(substr($data, 93, 1));
        $this->identificacao_da_operacao_do_banco = trim(substr($data, 94, 10));
        $this->indicador_rateio_credito_opcional = trim(substr($data, 104, 1));
        $this->enderecamento_para_aviso_do_debito_automatico_em_conta_corrente_opcional = trim(substr($data, 105, 1));
        $this->quantidade_de_pagamentos = trim(substr($data, 106, 2));
        $this->identificacao_da_ocorrencia = trim(substr($data, 108, 2));
        $this->numero_do_documento = trim(substr($data, 110, 10));
        $this->data_do_vencimento_do_titulo = trim(substr($data, 120, 6));
        $this->valor_do_titulo = trim(substr($data, 126, 13));
        $this->banco_encarregado_da_cobranca = trim(substr($data, 139, 3));
        $this->agencia_depositaria = trim(substr($data, 142, 5));
        $this->especie_de_titulo = trim(substr($data, 147, 2));
        $this->identificacao = trim(substr($data, 149, 1));
        $this->data_da_emissao_do_titulo = trim(substr($data, 150, 6));
        $this->primeira_instrucao = trim(substr($data, 156, 2));
        $this->segunda_instrucao = trim(substr($data, 158, 2));
        $this->valor_a_ser_cobrado_por_dia_de_atraso = trim(substr($data, 160, 13));
        $this->data_limite_p_concessao_de_desconto = trim(substr($data, 173, 6));
        $this->valor_do_desconto = trim(substr($data, 189, 13));
        $this->valor_do_iof = trim(substr($data, 192, 13));
        $this->valor_do_abatimento_a_ser_concedido_ou_cancelado = trim(substr($data, 205, 13));
        $this->identificacao_do_tipo_de_inscricao_do_pagador = trim(substr($data, 218, 2));
        $this->numero_inscricao_do_pagador = trim(substr($data, 220, 14));
        $this->nome_do_pagador = trim(substr($data, 234, 40));
        $this->endereco_completo = trim(substr($data, 274, 40));
        $this->primeira_mensagem = trim(substr($data, 314, 12));
        $this->cep = trim(substr($data, 326, 5));
        $this->sufixo_do_cep = trim(substr($data, 331, 3));
        $this->beneficiario_final_ou_2a_mensagem = trim(substr($data, 334, 60));
        $this->numero_sequencial_do_registro = trim(substr($data, 394, 6));
    }
}
