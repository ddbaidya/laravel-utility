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

    /**
     * LoremIpsum demo text
     *
     * @return string
     */
    public static function loremIpsumText()
    {
        return "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, nibh et bibendum viverra, augue magna congue augue, sit amet aliquam odio est id ex. Sed eget erat euismod, molestie ipsum ut, malesuada ipsum. Curabitur malesuada elit ut augue vehicula, a tincidunt metus iaculis. Curabitur id risus eget eros placerat feugiat. Sed vel velit vel velit tristique euismod. Curabitur id dapibus nisl. Aliquam erat volutpat. Curabitur vitae neque euismod, congue nibh id, interdum velit. Duis vel elit vel nibh euismod fringilla. Sed auctor, nibh et bibendum viverra, augue magna congue augue, sit amet aliquam odio est id ex. Sed eget erat euismod, molestie ipsum ut, malesuada ipsum.";
    }

    /**
     * Given a string string, remove every occurrence of the string $needle
     *
     * @param string $string
     * @param string $needle
     * @return string
     */
    public static function withOutString($string, $needle)
    {
        if (!empty($string) && !empty($needle)) {
            if (strpos($string, $needle) !== false) {
                return str_replace($needle, '', $string);
            }
        }

        return $string;
    }
}