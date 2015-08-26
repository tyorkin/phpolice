<?php

namespace Common;

use Registry;


class ServiceLocator
{
    private $serviceRegistry;

    public function __construct()
    {
        $this->serviceRegistry = Registry::getInstance();
    }

    function get($serviceName)
    {
        Registry::get($serviceName);
    }
    
    function set($obj)
    {
        $class = array_key_exists($obj, $this->knownObjects) ? $this->knownObjects[$obj] : ucfirst($obj);
        $file = dirname(__FILE__) . "/$class.php";
        if (!isset(self::$obj) && file_exists($file)) {
            require_once $file;
            return $this->$obj = call_user_method('getInstance', $class);
        } else {
            trigger_error("Can't load '$class' module.", E_USER_ERROR);
        }
    }

    public function __clone()
    {
        trigger_error('Clone is not allowed.', E_USER_ERROR);
    }
}

?> 