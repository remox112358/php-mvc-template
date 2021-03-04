<?php

namespace app\core;

use app\core\helpers\DebugHelper;

/**
 * Application router class.
 */
class Router
{
    /**
     * Application registered routes.
     *
     * @var array
     */
    protected $routes = [];

    /**
     * Request params.
     *
     * @var array
     */
    protected $params = [];

    // TODO: Write doc for this method.
    public function add()
    {

    }

    // TODO: Write doc for this method.
    public function match()
    {

    }

    // TODO: Write doc for this method.
    public function execute()
    {
        DebugHelper::show(true);
    }
}