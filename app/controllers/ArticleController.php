<?php

namespace app\controllers;

use app\core\lib\DB;
use app\core\Controller;
use app\core\helpers\DebugHelper;

class ArticleController extends Controller
{
    public function index()
    {
        $db = new DB;

        $articles = $db->query("SELECT * FROM articles");
        
        $this->render('master', 'article/index', compact('articles'));
    }
}