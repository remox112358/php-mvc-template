<?php

namespace app\controllers;

use app\core\lib\DB;
use app\core\Controller;
use app\core\helpers\DebugHelper;

use app\models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $model    = new Article;
        $articles = $model->getAll();
        
        $this->render('master', 'article/index', compact('articles'));
    }
}