<?php
 namespace Common;
 
class Registry
{
     private static $instance;

     private static $knownObjects = array(
 /*       'tpl'   => 'Templates',
        'data'  => 'DataStore',*/
    );
    
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }

        return self::$instance;
    }


    public static function get($name)
    {
        if (isset(self::$knownObjects[$name])) {
            return self::$knownObjects[$name];
        } else {
            return null;

        }
    }
    
    public static function set($name, $obj)
    {
        if (!isset(self::$knownObjects[$name])) {
            self::$knownObjects[$name] = $obj; 
        } else {
            trigger_error("'$name' already registered.", E_USER_ERROR);
        }
    }
    
    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
}
