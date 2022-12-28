<?php

namespace Elephant\Utility\Services;

use Illuminate\Support\Str;

class Utility
{
    /**
     * Return UUID
     *
     * @return string
     */
    public function uuid()
    {
        return Str::uuid();
    }
}