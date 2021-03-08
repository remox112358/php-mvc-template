<?php

namespace app\core;

use app\core\lib\DB;
use app\core\helpers\DebugHelper;

/**
 * Model base functionality class.
 */
abstract class Model
{
    /**
     * Database connection object.
     *
     * @var object
     */
    public $db;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        $this->db = new DB;
    }
}