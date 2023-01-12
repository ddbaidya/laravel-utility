<?php

namespace Cluster\Utility\Services;

trait Server
{
    /**
     * Return Domain Name
     *
     * @return string
     */
    public static function domainName()
    {
        return $_SERVER['SERVER_NAME'];
    }
}