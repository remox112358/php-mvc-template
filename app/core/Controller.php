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
     * Current route.
     *
     * @param array $route
     */
    public function __construct($route)
    {
        $this->route = $route;
    }

    /**
     * Renders the view with transmitted variables.
     *
     * @param  string $layout    - Name of the layout that needs to render.
     * @param  string $view      - Name of the view that needs to include in layout.
     * @param  array  $variables - Transmitted variables thats needs to be in rendered view.
     * @return void
     */
    public function render(string $layout, string $view, array $variables = [])
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
     * @param string $url - Redirect URL address.
     * @return void
     */
    public function redirect(string $url)
    {
        header('location: ' . $url);

        exit;
    }
}