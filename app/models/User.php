<?php

namespace app\models;

use app\core\Model;
use app\core\helpers\DebugHelper;
use app\core\lib\Request;

class User extends Model
{
    /**
     * Current model table name.
     *
     * @var string
     */
    public $tableName = 'users';

    /**
     * Authorizes the user.
     *
     * @param array $request - Transmitted request params.
     * @return void
     */
    public function login(array $request)
    {
        DebugHelper::show($request);
    }
}