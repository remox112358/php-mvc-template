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
     * Database connection object.
     *
     * @var object
     */
    protected $db;

    /**
     * Database connection config.
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
        $this->db     = new PDO($config['dsn'] . ';' . $config['charset'], $config['user'], $config['password']);
    }

    /**
     * Makes query to database using PDO.
     *
     * @param  string $sql    - SQL query that needs to prepare.
     * @param  array  $params - SQL query params that needs to bind.
     * @param  string $fetch  - Fetch type of query.
     * @return void
     */
    public function query(string $sql, array $params = [], string $fetch = 'row')
    {
        // Prepares query to database
        $stmt = $this->db->prepare($sql);

        if (! empty($params)) {
            foreach ($params as $param => $value) {
                // Binds params to query
                $stmt->bindValue(':' . $param, $value);
            }
        }
        
        // Executes query to database
        $stmt->execute();

        return $this->$fetch($stmt);
    }

    /**
     * Returns query result in row format.
     *
     * @param  object $stmt - SQL query statement.
     * @return array
     */
    public function row($stmt) : array
    {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Returns query result in column format.
     * If the result isn`t one field, returns first field value.
     *
     * @param object $stmt - SQL query statement.
     * @return void
     */
    public function column($stmt)
    {
        return $stmt->fetchColumn();
    }
}