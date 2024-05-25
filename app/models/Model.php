<?php
namespace app\models;

use PDO;

class Model
{
    protected $db;
    protected static $id;

    public static function database()
    {
        $db = new PDO("mysql:host=localhost;dbname=locationv", "root", );
        return $db;
    }

}