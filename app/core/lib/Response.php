<?php

namespace app\core\lib;

/**
 * Response base functionality class.
 */
class Response
{
    /**
     * Displays the http response page by code.
     *
     * @param  int $code - HTTP error code.
     * @return void
     */
    public static function statusCode(int $code)
    {
        http_response_code($code);

        $path = 'app/views/errors/' . $code . '.php';

        if (file_exists($path)) {
            require $path;
        }

        exit;
    }
}