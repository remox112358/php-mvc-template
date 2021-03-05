<?php

namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $this->render('master', 'site/home');
    }

    public function about()
    {
        echo 'about';
    }

    public function contact()
    {
        echo 'contact';
    }
}