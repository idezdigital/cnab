<?php

use Idez\Cnab\Cnab;

if (! function_exists('cnab')) {
    /**
     * @return Cnab
     */
    function cnab(): Cnab
    {
        return app(Cnab::class);
    }
}
