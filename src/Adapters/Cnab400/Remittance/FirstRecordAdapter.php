<?php

namespace Idez\Cnab\Adapters\Cnab400\Remittance;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class FirstRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $agencia_de_debito;
    public $digito_da_agencia_de_debito;
    public $razao_da_conta_corrente;
    public $conta_corrente;
    public $digito_da_conta_corrente;
    public $empresa_beneficiaria;
    public $numero_controle_do_participante;
    public $codigo_do_banco;
    public $multa;
    public $percentual_de_multa;
    public $nosso_numero;
    public $digito_de_autoconferencia_do_numero_bancario;
    public $desconto_bonificacao_por_dia;
    public $condicao_para_emissao_da_papeleta_de_cobranca;
    public $debito_automatico;
    public $operacao_do_banco;
    public $rateio_credito;
    public $enderecamento_para_aviso_do_debito_automatico;
    public $quantidade_de_pagamentos;
    public $ocorrencia;
    public $numero_do_documento;
    public $data_do_vencimento_do_titulo;
    public $valor_do_titulo;
    public $banco_encarregado_da_cobranca;
    public $agencia_depositaria;
    public $especie_de_titulo;
    public $descricao_especie_de_titulo;
    public $identificacao;
    public $data_da_emissao_do_titulo;
    public $primeira_instrucao;
    public $segunda_instrucao;
    public $valor_a_ser_cobrado_por_dia_de_atraso;
    public $data_limite_concessao_de_desconto;
    public $valor_do_desconto;
    public $valor_do_iof;
    public $valor_do_abatimento_a_ser_concedido_ou_cancelado;
    public $tipo_documento_do_pagador;
    public $documento_do_pagador;
    public $nome_do_pagador;
    public $endereco_completo;
    public $primeira_mensagem;
    public $prefixo_cep;
    public $sufixo_cep;
    public $cep;
    public $beneficiario_final_ou_2a_mensagem;
    public $sequencial;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->agencia_de_debito = trim(substr($str, 1, 5));
        $this->digito_da_agencia_de_debito = trim(substr($str, 6, 1));
        $this->razao_da_conta_corrente = trim(substr($str, 7, 5));
        $this->conta_corrente = trim(substr($str, 12, 7));
        $this->digito_da_conta_corrente = trim(substr($str, 19, 1));
        $this->empresa_beneficiaria = trim(substr($str, 20, 17));
        $this->numero_controle_do_participante = trim(substr($str, 37, 25));
        $this->codigo_do_banco = trim(substr($str, 62, 3));
        $this->multa = trim(substr($str, 65, 1)) === '2';
        $this->percentual_de_multa = trim(substr($str, 66, 4)) / 10000;
        $this->nosso_numero = trim(substr($str, 70, 11));
        $this->digito_de_autoconferencia_do_numero_bancario = trim(substr($str, 81, 1));
        $this->desconto_bonificacao_por_dia = trim(substr($str, 82, 10)) / 100;
        $this->condicao_para_emissao_da_papeleta_de_cobranca = trim(substr($str, 92, 1));
        $this->debito_automatico = trim(substr($str, 93, 1)) !== 'N';
        $this->operacao_do_banco = trim(substr($str, 94, 10));
        $this->rateio_credito = trim(substr($str, 104, 1));
        $this->enderecamento_para_aviso_do_debito_automatico = trim(substr($str, 105, 1));
        $this->quantidade_de_pagamentos = trim(substr($str, 106, 2));
        $this->ocorrencia = trim(substr($str, 108, 2));
        $this->numero_do_documento = trim(substr($str, 110, 10));
        $this->data_do_vencimento_do_titulo = $this->parseDate(trim(substr($str, 120, 6)));
        $this->valor_do_titulo = $this->parseDecimal(trim(substr($str, 126, 13)));
        $this->banco_encarregado_da_cobranca = trim(substr($str, 139, 3));
        $this->agencia_depositaria = trim(substr($str, 142, 5));
        $this->especie_de_titulo = trim(substr($str, 147, 2));
        $this->descricao_especie_de_titulo = $this->parseDescription($this->especie_de_titulo);
        $this->identificacao = trim(substr($str, 149, 1));
        $this->data_da_emissao_do_titulo = $this->parseDate(trim(substr($str, 150, 6)));
        $this->primeira_instrucao = trim(substr($str, 156, 2));
        $this->segunda_instrucao = trim(substr($str, 158, 2));
        $this->valor_a_ser_cobrado_por_dia_de_atraso = $this->parseDecimal(trim(substr($str, 160, 13)));
        $this->data_limite_concessao_de_desconto = $this->parseDate(trim(substr($str, 173, 6)));
        $this->valor_do_desconto = $this->parseDecimal(trim(substr($str, 179, 13)));
        $this->valor_do_iof = $this->parseDecimal(trim(substr($str, 192, 13)));
        $this->valor_do_abatimento_a_ser_concedido_ou_cancelado = $this->parseDecimal(trim(substr($str, 205, 13)));
        $this->tipo_documento_do_pagador = trim(substr($str, 218, 2)) === '01' ? 'cpf' : 'cnpj';
        $this->documento_do_pagador = trim(substr($str, 220, 14));
        $this->nome_do_pagador = trim(substr($str, 234, 40));
        $this->endereco_completo = trim(substr($str, 274, 40));
        $this->primeira_mensagem = trim(substr($str, 314, 12));
        $this->prefixo_cep = trim(substr($str, 326, 5));
        $this->sufixo_cep = trim(substr($str, 331, 3));
        $this->cep = $this->prefixo_cep . $this->sufixo_cep;
        $this->beneficiario_final_ou_2a_mensagem = trim(substr($str, 334, 60));
        $this->sequencial = trim(substr($str, 394, 6));

        return $this;
    }
}
