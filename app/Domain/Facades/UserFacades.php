<?php

namespace App\Domain\Facades;
use Illuminate\Support\Facades\Facade;

class UserFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        
        return 'UserServices'; // Return the string that corresponds to the service binding
    }
}