<?php

namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $date = date('Y-m-d');

        $this->render('master', 'site/home', compact('date'));
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