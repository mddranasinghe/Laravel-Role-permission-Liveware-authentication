<?php

namespace App\Domain\Facades;
use Illuminate\Support\Facades\Facade;

class TodoFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        
        return 'TodoServices'; // Return the string that corresponds to the service binding
    }
}