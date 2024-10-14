<?php 
namespace app;

use PDO;

class Connection
{
    protected static $instance = null;

    public static function getinstance()
    {

        if (self::$instance === null) {
            self::$instance = new pdo("mysql:host=localhost;dbname=designpattern", "root", "160819");
        }
        return  self::$instance;
    }
}
?>