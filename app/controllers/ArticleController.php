<?php

namespace app\controllers;

use app\core\lib\DB;
use app\core\Controller;
use app\core\helpers\DebugHelper;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = [
            [
                'title'   => 'Article 1',
                'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore architecto, suscipit vitae fugiat ab temporibus.',
                'date'    => date('Y-m-d H:i'),
            ],
            [
                'title'   => 'Article 2',
                'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore architecto, suscipit vitae fugiat ab temporibus.',
                'date'    => date('Y-m-d H:i'),
            ],
            [
                'title'   => 'Article 3',
                'excerpt' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore architecto, suscipit vitae fugiat ab temporibus.',
                'date'    => date('Y-m-d H:i'),
            ],
        ];
        
        $this->render('master', 'article/index', compact('articles'));
    }
}