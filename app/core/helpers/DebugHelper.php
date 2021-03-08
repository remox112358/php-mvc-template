<?php

namespace app\core\helpers;

/**
 * Debug helper functionality class.
 */
final class DebugHelper
{
    /**
     * Shows information in a more convenient format.
     *
     * @param  mixed $arg - Transmitted variable that needs to display.
     * @param  bool  $die - Exit from script or not.
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