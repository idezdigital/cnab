<?php

namespace Idez\Cnab\Adapters\Cnab400\Bradesco;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class SixthRecordAdapter extends Cnab400Adapter
{
    public function __construct($data)
    {
        $this->identificacao_do_registro = trim(substr($data, 0, 1));
        $this->carteira = trim(substr($data, 1, 3));
        $this->agencia = trim(substr($data, 4, 5));
        $this->conta_corrente = trim(substr($data, 9, 7));
        $this->nosso_numero = trim(substr($data, 16, 11));
        $this->digito_do_nosso_numero = trim(substr($data, 27, 1));
        $this->tipo_de_operacao = trim(substr($data, 28, 1));
        $this->utilizacao_do_cheque_especial = trim(substr($data, 29, 1));
        $this->consulta_saldo_apos_o_vencimento = trim(substr($data, 30, 1));
        $this->numero_cod_identificacao_contrato = trim(substr($data, 31, 25));
        $this->prazo_de_validade_do_contrato_autorizacao = trim(substr($data, 57, 8));
        $this->brancos = trim(substr($data, 65, 330));
        $this->numero_sequencial_do_registro = trim(substr($data, 395, 5));
    }
}
