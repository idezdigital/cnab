<?php

namespace Idez\Cnab\Adapters\Cnab400;

abstract class Cnab400Adapter
{
    /**
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
}
