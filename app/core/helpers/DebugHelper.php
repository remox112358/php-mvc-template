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
        
        // Checking type of argument
        if (is_array($arg)) {
            print_r($arg);
        } else {
            var_dump($arg);
        }

        print('</pre>');

        // If die argument was passed as true
        if ($die) die();
    }
}