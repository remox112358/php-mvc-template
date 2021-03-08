<?php

namespace app\models;

use app\core\Model;

class Article extends Model
{
    public function getAll()
    {
        return $this->db->query("SELECT * FROM articles");
    }
}