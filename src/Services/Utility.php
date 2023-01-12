<?php

namespace Cluster\Utility\Services;

class Utility
{
    use Server, Client, St;
    /**
     * Slug to title generate
     *
     * @param string
     * @param bool $capitalize
     * @return string
     */
    public static function slugToTitle($slug, bool $capitalize = true): string
    {
        $title = str_replace('-', ' ', $slug);
        return ($capitalize) ? ucwords($title) : ucfirst($title);
    }

    /**
     * Return UUID
     *
     * @return string
     */
    public static function uuid(): string
    {
        return Str::uuid();
    }
}