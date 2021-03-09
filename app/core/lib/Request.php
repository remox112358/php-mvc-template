<?php

namespace app\core\lib;

/**
 * Request base functionality class.
 */
class Request
{
    /**
     * Returns GET response params of the query.
     *
     * @return array
     */
    public static function get() : array
    {
        return $_GET;
    }

    /**
     * Returns POST response params of the query.
     *
     * @return array
     */
    public static function post() : array
    {
        return $_POST;
    }
}