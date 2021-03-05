<?php

namespace app\core;

use app\core\View;
use app\core\helpers\DebugHelper;

/**
 * Controller base functionality class.
 */
abstract class Controller
{
    /**
     * Current view.
     *
     * @var View
     */
    public $view;

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
        $this->view  = new View;
        $this->route = $route;
    }

    public function render($view, $variables)
    {
        extract($variables);

        // TODO: Controller view render.
    }
}

