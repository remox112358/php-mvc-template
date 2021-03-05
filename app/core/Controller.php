<?php

namespace app\core;

use app\core\helpers\DebugHelper;

/**
 * Controller base functionality class.
 */
abstract class Controller
{
    /**
     * Current route.
     *
     * @var array
     */
    public $route;

    /**
     * Current layout.
     *
     * @var string
     */
    public $layout;

    /**
     * Controller constructor.
     *
     * @param array $route
     */
    public function __construct($route, $layout = 'master')
    {
        $this->route  = $route;
        $this->layout = $layout;
    }

    public function render($view, $variables)
    {
        extract($variables);

        // Path to view
        $path = 'app/views/' . $view;

        // If this view exists
        if (file_exists($path)) {
            // Buffer opening
            ob_start();

            require $path;

            $content = ob_get_clean();

            require 'app/views/layouts/' . $this->layout . '.php';
        }
    }
}

