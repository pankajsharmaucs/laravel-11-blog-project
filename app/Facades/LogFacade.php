<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class LogFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'logservice'; // This should match the binding in the container
    }
}
