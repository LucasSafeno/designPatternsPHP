<?php
namespace app;

class Log{

    protected static $instance = null;

    public static function getinstance()
    {

        if(self::$instance == null)
        {
            self::$instance = new self();
        }
        return new self();
    }

}// Log
?>