<?php

namespace app\core\lib;

use PDO;
use app\core\helpers\DebugHelper;

/**
 * Application database class.
 */
class DB
{
    /**
     * Database object.
     *
     * @var object
     */
    protected $db;

    /**
     * Database config.
     *
     * @var array
     */
    protected $config;

    /**
     * Database constructor.
     */
    public function __construct()
    {
        $config = require 'app/config/db.php';

        $this->config = $config;
        $this->db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);
    }

    /**
     * Makes query to database using PDO.
     *
     * @param string $sql
     * @param array $params
     * @return object
     */
    public function query(string $sql, array $params = [])
    {
        // Prepares query to database
        $stmt = $this->db->prepare($sql);

        if (! empty($params)) {
            foreach ($params as $param => $value) {
                // Binds params to query
                $stmt->bindValue(':', $param, $value);
            }
        }
        
        // Executes query to database
        $stmt->execute();

        return $stmt;
    }
}