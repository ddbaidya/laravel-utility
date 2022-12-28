<?php

namespace Elephant\Utility\Facades;

use Illuminate\Support\Facades\Facade;

class Utility extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'utility';
    }
}
