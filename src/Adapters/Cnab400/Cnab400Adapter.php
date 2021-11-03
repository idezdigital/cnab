<?php

namespace Idez\Cnab\Adapters\Cnab400;

use Carbon\Carbon;

abstract class Cnab400Adapter
{
    /**
     * Convert object to array.
     *
     * @return array
     */
    public function toArray(): array
    {
        $vars = get_object_vars($this);
        $array = [];

        foreach ($vars as $key => $value) {
            $array[$key] = $value;
        }

        return $array;
    }

    /**
     * Parse date.
     *
     * @param string $value
     * @return string
     */
    public function parseDate(string $value): string
    {
        return Carbon::createFromFormat('dmy', $value)->toDateString();
    }

    /**
     * Parse decimal.
     *
     * @param string $value
     * @return float
     */
    public function parseDecimal(string $value): float
    {
        return round($value / 100, 2);
    }

    /**
     * Parse description.
     *
     * @param string $value
     * @return string
     */
    public function parseDescription(string $value): string
    {
        return match ($value) {
            '01' => 'Duplicata',
            '02' => 'Nota Promissória',
            '03' => 'Nota de Seguro',
            '05' => 'Recibo',
            '10' => 'Letras de Câmbio',
            '11' => 'Nota de Débito',
            '12' => 'Duplicata de Serviço',
            '31' => 'Cartão de Crédito',
            '32' => 'Boleto de Proposta',
            '33' => 'Depósito e Aporte',
            '99' => 'Outros',
            default => 'Desconhecido',
        };
    }
}
