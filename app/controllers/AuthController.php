<?php

namespace app\controllers;

use app\core\Controller;
use app\core\lib\Request;
use app\core\helpers\DebugHelper;

use app\models\User;

class AuthController extends Controller
{
    public function login()
    {
        if (Request::post()) {
            $model = new User;
            $model->login(Request::post());
        }

        $this->render('master', 'auth/login');
    }

    public function signup()
    {
        if (Request::post(Request::post())) {
            // ...
        }
        
        $this->render('master', 'auth/signup');
    }
}