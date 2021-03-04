<?php

namespace app\core\helpers;

/**
 * Debug functionality class.
 */
class DebugHelper
{
    /**
     * Shows information in a more convenient format.
     *
     * @param mixed $arg
     * @param bool $die
     * @return void
     */
    public static function show($arg, $die = false)
    {
        print('<pre>');
        is_array($arg) ? print_r($arg) : var_dump($arg);
        print('</pre>');

        if ($die) die();
    }
}