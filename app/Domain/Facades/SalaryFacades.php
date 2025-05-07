<?php

namespace App\Domain\Facades;
use Illuminate\Support\Facades\Facade;

use App\Domain\Services\SalaryServices; 

class SalaryFacades extends Facade
{
    protected static function getFacadeAccessor()
    {
        echo "oooo";
        return 'SalaryServices'; // Return the string that corresponds to the service binding
    }
}