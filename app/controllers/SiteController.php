<?php

namespace app\controllers;

use app\core\Controller;

class SiteController extends Controller
{
    public function home()
    {
        $name = 'Artyom';

        $this->render('site/home.php', compact('name'));
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