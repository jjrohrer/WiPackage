<?php

namespace jjrohrer\WiPackage1\Facades;

use Illuminate\Support\Facades\Facade;

class WiPackage1 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'wipackage1';
    }
}
