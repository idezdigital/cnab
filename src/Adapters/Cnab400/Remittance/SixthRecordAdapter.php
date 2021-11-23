<?php

namespace Idez\Cnab\Adapters\Cnab400\Remittance;

use Idez\Cnab\Adapters\Cnab400\Cnab400Adapter;

class SixthRecordAdapter extends Cnab400Adapter
{
    public $registro;
    public $carteira;
    public $agencia;
    public $conta_corrente;
    public $nosso_numero;
    public $digito_do_nosso_numero;
    public $tipo_de_operacao;
    public $utilizacao_do_cheque_especial;
    public $consulta_saldo_apos_o_vencimento;
    public $numero_cod_identificacao_contrato;
    public $prazo_de_validade_do_contrato_autorizacao;
    public $brancos;
    public $sequencial;

    public function fromString(string $str)
    {
        $this->registro = trim(substr($str, 0, 1));
        $this->carteira = trim(substr($str, 1, 3));
        $this->agencia = trim(substr($str, 4, 5));
        $this->conta_corrente = trim(substr($str, 9, 7));
        $this->nosso_numero = trim(substr($str, 16, 11));
        $this->digito_do_nosso_numero = trim(substr($str, 27, 1));
        $this->tipo_de_operacao = trim(substr($str, 28, 1));
        $this->utilizacao_do_cheque_especial = trim(substr($str, 29, 1));
        $this->consulta_saldo_apos_o_vencimento = trim(substr($str, 30, 1));
        $this->numero_cod_identificacao_contrato = trim(substr($str, 31, 25));
        $this->prazo_de_validade_do_contrato_autorizacao = trim(substr($str, 57, 8));
        $this->brancos = trim(substr($str, 65, 330));
        $this->sequencial = trim(substr($str, 395, 5));

        return $this;
    }
}
