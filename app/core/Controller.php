<?php

namespace app\core;

use app\core\helpers\DebugHelper;
use app\core\lib\Exception;

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

        if (file_exists($layout) && file_exists($path)) {
            ob_start();

            require $path;

            $content = ob_get_clean();

            require $layout;
        } else {
            Exception::throw(404);
        }
    }

    /**
     * Redirects to other url.
     *
     * @param string $url
     * @return void
     */
    public function redirect($url)
    {
        header('location: ' . $url);

        exit;
    }
}