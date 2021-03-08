<?php

namespace app\core\lib;

class Exception
{
    /**
     * Displays the error page by code.
     *
     * @param int $code
     * @return void
     */
    public static function throw($code)
    {
        http_response_code($code);

        $path = 'app/views/errors/' . $code . '.php';

        if (file_exists($path)) {
            require $path;
        }

        exit;
    }
}