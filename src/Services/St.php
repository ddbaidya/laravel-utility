<?php

namespace Cluster\Utility\Services;

trait St
{
    /**
     * @param int $length
     *
     * @return string
     */
    public static function randomString($length = 32)
    {
        return bin2hex(random_bytes($length / 2));
    }
}