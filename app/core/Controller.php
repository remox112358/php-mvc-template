<?php

namespace app\core;

use app\core\helpers\DebugHelper;
use app\core\lib\ErrorHandler;

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
     * Controller constructor.
     *
     * @param array $route
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    /**
     * Renders the view with sended variables.
     *
     * @param string $view
     * @param array $variables
     * @return void
     */
    public function render($layout, $view, $variables = [])
    {
        extract($variables);

        // Path to view
        $path = 'app/views/' . $view . '.php';

        // Path to layout
        $layout = 'app/views/layouts/' . $layout . '.php';

        // If this layout exists
        if (file_exists($layout)) {
            // If this view exists
            if (file_exists($path)) {
                ob_start();
    
                require $path;
    
                $content = ob_get_clean();
    
                require $layout;
            } else {
                ErrorHandler::throw(404);
            }
        } else {
            ErrorHandler::throw(404);
        }
    }
}