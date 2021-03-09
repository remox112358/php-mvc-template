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
     * Table name of current model.
     *
     * @var string
     */
    public $tableName;

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