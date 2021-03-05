<?php

namespace app\core\helpers;

/**
 * Debug functionality class.
 */
final class DebugHelper
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
        
        // Checking type of argument
        is_array($arg) ? print_r($arg) : var_dump($arg);

        print('</pre>');

        // If die argument was passed as true
        if ($die) die();
    }
}