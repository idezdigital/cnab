<?php

namespace Idez\Cnab;

use Idez\Cnab\Exceptions\InvalidFileException;

class Cnab
{
    /**
     * Parse cnab file.
     *
     * @return array
     */
    public function parse(
        string $type,
        int $layout,
        int $bank,
        string $file,
    ): array {
        $raw = str_split($file, 400);
        if (count($raw) <= 1) {
            throw new InvalidFileException('Invalid file.');
        }

        $header = [
            'identificacao_do_registro' => trim(substr($raw[0], 0, 1)),
            'identificacao_do_arquivo_remessa' => trim(substr($raw[0], 1, 1)),
            'literal_remessa' => trim(substr($raw[0], 2, 7)),
            'codigo_de_servico' => trim(substr($raw[0], 9, 2)),
            'literal_servico' => trim(substr($raw[0], 11, 15)),
            'codigo_da_empresa' => trim(substr($raw[0], 26, 20)),
            'nome_da_empresa' => trim(substr($raw[0], 46, 30)),
            'numero_do_bradesco_na_camara_de_compensacao' => trim(substr($raw[0], 76, 3)),
            'nome_do_banco_por_extenso' => trim(substr($raw[0], 79, 15)),
            'data_da_gravacao_do_arquivo' => trim(substr($raw[0], 94, 6)),
            'branco_01' => trim(substr($raw[0], 100, 8)),
            'identificacao_do_sistema' => trim(substr($raw[0], 108, 2)),
            'numero_sequencial_de_remessa' => trim(substr($raw[0], 110, 7)),
            'branco_02' => trim(substr($raw[0], 117, 277)),
            'numero_sequencial_do_registro' => trim(substr($raw[0], 394, 6)),
        ];

        $rows = [];
        foreach (array_slice($raw, 1) as $rawRow) {
            switch (substr($rawRow, 0, 1)) {
                case '1':
                    $rows += [[
                        'identificacao_do_registro' => trim(substr($rawRow, 0, 1)),
                        'agencia_de_debito_opcional' => trim(substr($rawRow, 1, 5)),
                        'digito_da_agencia_de_debito_opcional' => trim(substr($rawRow, 6, 1)),
                        'razao_da_conta_corrente_opcional' => trim(substr($rawRow, 7, 5)),
                        'conta_corrente_opcional' => trim(substr($rawRow, 12, 7)),
                        'digito_da_conta_corrente_opcional' => trim(substr($rawRow, 19, 1)),
                        'identificacao_da_empresa_beneficiaria_no_banco' => trim(substr($rawRow, 20, 17)),
                        'numero_controle_do_participante' => trim(substr($rawRow, 37, 25)),
                        'codigo_do_banco_a_ser_debitado_na_camara_de_compensacao' => trim(substr($rawRow, 62, 3)),
                        'campo_de_multa' => trim(substr($rawRow, 65, 1)),
                        'percentual_de_multa' => trim(substr($rawRow, 66, 4)),
                        'identificacao_do_titulo_no_banco' => trim(substr($rawRow, 70, 11)),
                        'digito_de_autoconferencia_do_numero_bancario' => trim(substr($rawRow, 81, 1)),
                        'desconto_bonificacao_por_dia' => trim(substr($rawRow, 82, 10)),
                        'condicao_para_emissao_da_papeleta_de_cobranca' => trim(substr($rawRow, 92, 1)),
                        'ident_se_emite_boleto_para_debito_automatico' => trim(substr($rawRow, 93, 1)),
                        'identificacao_da_operacao_do_banco' => trim(substr($rawRow, 94, 10)),
                        'indicador_rateio_credito_opcional' => trim(substr($rawRow, 104, 1)),
                        'enderecamento_para_aviso_do_debito_automatico_em_conta_corrente_opcional' => trim(substr($rawRow, 105, 1)),
                        'quantidade_de_pagamentos' => trim(substr($rawRow, 106, 2)),
                        'identificacao_da_ocorrencia' => trim(substr($rawRow, 108, 2)),
                        'numero_do_documento' => trim(substr($rawRow, 110, 10)),
                        'data_do_vencimento_do_titulo' => trim(substr($rawRow, 120, 6)),
                        'valor_do_titulo' => trim(substr($rawRow, 126, 13)),
                        'banco_encarregado_da_cobranca' => trim(substr($rawRow, 139, 3)),
                        'agencia_depositaria' => trim(substr($rawRow, 142, 5)),
                        'especie_de_titulo' => trim(substr($rawRow, 147, 2)),
                        'identificacao' => trim(substr($rawRow, 149, 1)),
                        'data_da_emissao_do_titulo' => trim(substr($rawRow, 150, 6)),
                        '1a_instrucao' => trim(substr($rawRow, 156, 2)),
                        '2a_instrucao' => trim(substr($rawRow, 158, 2)),
                        'valor_a_ser_cobrado_por_dia_de_atraso' => trim(substr($rawRow, 160, 13)),
                        'data_limite_p_concessao_de_desconto' => trim(substr($rawRow, 173, 6)),
                        'valor_do_desconto' => trim(substr($rawRow, 189, 13)),
                        'valor_do_iof' => trim(substr($rawRow, 192, 13)),
                        'valor_do_abatimento_a_ser_concedido_ou_cancelado' => trim(substr($rawRow, 205, 13)),
                        'identificacao_do_tipo_de_inscricao_do_pagador' => trim(substr($rawRow, 218, 2)),
                        'numero_inscricao_do_pagador' => trim(substr($rawRow, 220, 14)),
                        'nome_do_pagador' => trim(substr($rawRow, 234, 40)),
                        'endereco_completo' => trim(substr($rawRow, 274, 40)),
                        '1a_mensagem' => trim(substr($rawRow, 314, 12)),
                        'cep' => trim(substr($rawRow, 326, 5)),
                        'sufixo_do_cep' => trim(substr($rawRow, 331, 3)),
                        'beneficiario_final_ou_2a_mensagem' => trim(substr($rawRow, 334, 60)),
                        'numero_sequencial_do_registro' => trim(substr($rawRow, 394, 6)),
                    ]];

                    break;
                case '2':
                    $rows += [[
                        'identificacao_do_registro' => trim(substr($rawRow, 0, 1)),
                        'mensagem_1' => trim(substr($rawRow, 1, 80)),
                        'mensagem_2' => trim(substr($rawRow, 81, 80)),
                        'mensagem_3' => trim(substr($rawRow, 161, 80)),
                        'mensagem_4' => trim(substr($rawRow, 241, 80)),
                        'data_limite_para_concessao_de_desconto_2' => trim(substr($rawRow, 321, 6)),
                        'valor_do_desconto_2' => trim(substr($rawRow, 327, 13)),
                        'data_limite_para_concessao_de_desconto_3' => trim(substr($rawRow, 340, 6)),
                        'valor_do_desconto_3' => trim(substr($rawRow, 346, 13)),
                        'reserva' => trim(substr($rawRow, 359, 7)),
                        'carteira' => trim(substr($rawRow, 366, 3)),
                        'agencia' => trim(substr($rawRow, 369, 5)),
                        'conta_corrente' => trim(substr($rawRow, 374, 7)),
                        'digito_cc' => trim(substr($rawRow, 381, 1)),
                        'nosso_numero' => trim(substr($rawRow, 382, 11)),
                        'dac_nosso_numero' => trim(substr($rawRow, 393, 1)),
                        'numero_sequencial_do_registro' => trim(substr($rawRow, 394, 6)),
                    ]];

                    break;
                case '3':
                    $rows += [[
                        'identificacao_do_registro' => trim(substr($rawRow, 0, 1)),
                        'identificacao_da_empresa_no_banco' => trim(substr($rawRow, 1, 16)),
                        'identificacao_titulo_no_banco' => trim(substr($rawRow, 17, 12)),
                        'codigo_para_calculo_do_rateio' => trim(substr($rawRow, 29, 1)),
                        'tipo_de_valor_informado' => trim(substr($rawRow, 30, 1)),
                        'filler_1' => trim(substr($rawRow, 31, 12)),
                        'codigo_do_banco_para_credito_do_1o_beneficiario' => trim(substr($rawRow, 43, 3)),
                        'codigo_da_agencia_para_credito_do_1o_beneficiario' => trim(substr($rawRow, 46, 5)),
                        'digito_da_agencia_para_credito_do_1o_beneficiario' => trim(substr($rawRow, 51, 1)),
                        'numero_da_conta_corrente_para_credito_do_1o_beneficiario' => trim(substr($rawRow, 52, 12)),
                        'digito_da_conta_corrente_para_credito_do_1o_beneficiario' => trim(substr($rawRow, 64, 1)),
                        'valor_ou_percentual_para_rateio_1' => trim(substr($rawRow, 65, 15)),
                        'nome_do_1o_beneficiario' => trim(substr($rawRow, 80, 40)),
                        'filler_2' => trim(substr($rawRow, 120, 31)),
                        'parcela_1' => trim(substr($rawRow, 151, 6)),
                        'floating_para_o_1o_beneficiario' => trim(substr($rawRow, 157, 3)),
                        'codigo_do_banco_para_credito_do_2o_beneficiario' => trim(substr($rawRow, 160, 3)),
                        'codigo_da_agencia_para_credito_do_2o_beneficiario' => trim(substr($rawRow, 163, 5)),
                        'digito_da_agencia_para_credito_do_2o_beneficiario' => trim(substr($rawRow, 168, 1)),
                        'numero_da_conta_corrente_para_credito_do_2o_beneficiario' => trim(substr($rawRow, 169, 12)),
                        'digito_da_conta_corrente_para_credito_do_2o_beneficiario' => trim(substr($rawRow, 181, 1)),
                        'valor_ou_percentual_para_rateio_2' => trim(substr($rawRow, 182, 15)),
                        'nome_do_2o_beneficiario' => trim(substr($rawRow, 197, 40)),
                        'filler_3' => trim(substr($rawRow, 237, 31)),
                        'parcela_2' => trim(substr($rawRow, 268, 6)),
                        'floating_para_o_2o_beneficiario' => trim(substr($rawRow, 274, 3)),
                        'codigo_do_banco_para_credito_do_3o_beneficiario' => trim(substr($rawRow, 277, 3)),
                        'codigo_da_agencia_para_credito_do_3o_beneficiario' => trim(substr($rawRow, 280, 5)),
                        'digito_da_agencia_para_credito_do_3o_beneficiario' => trim(substr($rawRow, 285, 1)),
                        'numero_da_conta_corrente_para_credito_do_3o_beneficiario' => trim(substr($rawRow, 286, 12)),
                        'digito_da_conta_corrente_para_credito_do_3o_beneficiario' => trim(substr($rawRow, 298, 1)),
                        'valor_ou_percentual_para_rateio_3' => trim(substr($rawRow, 299, 15)),
                        'nome_do_3o_beneficiario' => trim(substr($rawRow, 314, 40)),
                        'filler_4' => trim(substr($rawRow, 354, 31)),
                        'parcela_3' => trim(substr($rawRow, 385, 6)),
                        'floating_para_3o_beneficiario' => trim(substr($rawRow, 391, 3)),
                        'numero_sequencial_do_registro' => trim(substr($rawRow, 394, 6)),
                    ]];

                    break;
                case '6':
                    $rows += [[
                        'identificacao_do_registro' => trim(substr($rawRow, 0, 1)),
                        'carteira' => trim(substr($rawRow, 1, 3)),
                        'agencia' => trim(substr($rawRow, 4, 5)),
                        'conta_corrente' => trim(substr($rawRow, 9, 7)),
                        'nosso_numero' => trim(substr($rawRow, 16, 11)),
                        'digito_do_nosso_numero' => trim(substr($rawRow, 27, 1)),
                        'tipo_de_operacao' => trim(substr($rawRow, 28, 1)),
                        'utilizacao_do_cheque_especial' => trim(substr($rawRow, 29, 1)),
                        'consulta_saldo_apos_o_vencimento' => trim(substr($rawRow, 30, 1)),
                        'numero_cod_identificacao_contrato' => trim(substr($rawRow, 31, 25)),
                        'prazo_de_validade_do_contrato_autorizacao' => trim(substr($rawRow, 57, 8)),
                        'brancos' => trim(substr($rawRow, 65, 330)),
                        'numero_sequencial_do_registro' => trim(substr($rawRow, 395, 5)),
                    ]];

                    break;
            }
        }

        return [
            'type' => $type,
            'layout' => $layout,
            'bank' => $bank,
            'header' => $header,
            'rows' => $rows,
        ];
    }

    /**
     * Generate cnab file.
     *
     * @return mixed
     */
    public function generate(
        string $type,
        int $layout,
        int $bank,
        array $data
    ): mixed {
        return [];
    }
}
