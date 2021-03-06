<?php

namespace Idez\Cnab;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Idez\Cnab\Cnab
 */
class CnabFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'cnab';
    }
}
