<?php

namespace Idez\Cnab\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Idez\Cnab\Cnab
 */
class CnabFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cnab';
    }
}
