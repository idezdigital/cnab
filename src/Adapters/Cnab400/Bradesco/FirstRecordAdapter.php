<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class FirstRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->registro = trim(substr($data, 0, 1));
        $this->agencia_de_debito = trim(substr($data, 1, 5));
        $this->digito_da_agencia_de_debito = trim(substr($data, 6, 1));
        $this->razao_da_conta_corrente = trim(substr($data, 7, 5));
        $this->conta_corrente = trim(substr($data, 12, 7));
        $this->digito_da_conta_corrente = trim(substr($data, 19, 1));
        $this->empresa_beneficiaria = trim(substr($data, 20, 17));
        $this->numero_controle_do_participante = trim(substr($data, 37, 25));
        $this->codigo_do_banco = trim(substr($data, 62, 3));
        $this->multa = trim(substr($data, 65, 1)) === '2';
        $this->percentual_de_multa = trim(substr($data, 66, 4)) / 10000;
        $this->nosso_numero = trim(substr($data, 70, 11));
        $this->digito_de_autoconferencia_do_numero_bancario = trim(substr($data, 81, 1));
        $this->desconto_bonificacao_por_dia = trim(substr($data, 82, 10)) / 100;
        $this->condicao_para_emissao_da_papeleta_de_cobranca = trim(substr($data, 92, 1));
        $this->debito_automatico = trim(substr($data, 93, 1)) !== 'N';
        $this->operacao_do_banco = trim(substr($data, 94, 10));
        $this->rateio_credito = trim(substr($data, 104, 1));
        $this->enderecamento_para_aviso_do_debito_automatico = trim(substr($data, 105, 1));
        $this->quantidade_de_pagamentos = trim(substr($data, 106, 2));
        $this->ocorrencia = trim(substr($data, 108, 2));
        $this->numero_do_documento = trim(substr($data, 110, 10));
        $this->data_do_vencimento_do_titulo = $this->parseDate(trim(substr($data, 120, 6)));
        $this->valor_do_titulo = $this->parseDecimal(trim(substr($data, 126, 13)));
        $this->banco_encarregado_da_cobranca = trim(substr($data, 139, 3));
        $this->agencia_depositaria = trim(substr($data, 142, 5));
        $this->especie_de_titulo = trim(substr($data, 147, 2));
        $this->descricao_especie_de_titulo = $this->parseDescription($this->especie_de_titulo);
        $this->identificacao = trim(substr($data, 149, 1));
        $this->data_da_emissao_do_titulo = $this->parseDate(trim(substr($data, 150, 6)));
        $this->primeira_instrucao = trim(substr($data, 156, 2));
        $this->segunda_instrucao = trim(substr($data, 158, 2));
        $this->valor_a_ser_cobrado_por_dia_de_atraso = $this->parseDecimal(trim(substr($data, 160, 13)));
        $this->data_limite_concessao_de_desconto = $this->parseDate(trim(substr($data, 173, 6)));
        $this->valor_do_desconto = $this->parseDecimal(trim(substr($data, 189, 13)));
        $this->valor_do_iof = $this->parseDecimal(trim(substr($data, 192, 13)));
        $this->valor_do_abatimento_a_ser_concedido_ou_cancelado = $this->parseDecimal(trim(substr($data, 205, 13)));
        $this->tipo_documento_do_pagador = trim(substr($data, 218, 2)) === '01' ? 'cpf' : 'cnpj';
        $this->documento_do_pagador = trim(substr($data, 220, 14));
        $this->nome_do_pagador = trim(substr($data, 234, 40));
        $this->endereco_completo = trim(substr($data, 274, 40));
        $this->primeira_mensagem = trim(substr($data, 314, 12));
        $this->prefixo_cep = trim(substr($data, 326, 5));
        $this->sufixo_cep = trim(substr($data, 331, 3));
        $this->cep = $this->prefixo_cep . $this->sufixo_cep;
        $this->beneficiario_final_ou_2a_mensagem = trim(substr($data, 334, 60));
        $this->sequencial = trim(substr($data, 394, 6));
    }
}
