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
        $this->db     = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['name'], $config['user'], $config['password']);
    }

    /**
     * Makes query to database using PDO.
     *
     * @param string $sql
     * @param array $params
     * @param string $fetch
     * @return object
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
     * If the result isn`t one field, then returns first field value.
     *
     * @param object $stmt
     * @return array
     */
    public function row($stmt) : array
    {
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Returns query result in column format.
     *
     * @param object $stmt
     * @return string
     */
    public function column($stmt) : string
    {
        return $stmt->fetchColumn();
    }
}