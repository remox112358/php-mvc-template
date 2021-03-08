<?php

namespace app\core\lib;

/**
 * Exception base functionality class.
 */
class Exception
{
    /**
     * Displays the error page by code.
     *
     * @param  int $code - HTTP error code.
     * @return void
     */
    public static function throw(int $code)
    {
        http_response_code($code);

        $path = 'app/views/errors/' . $code . '.php';

        if (file_exists($path)) {
            require $path;
        }

        exit;
    }
}