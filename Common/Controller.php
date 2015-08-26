<?php
 namespace Common;
 
 use Common\Registry;
 use Common\ControllerInterface;
 
  class Controller implements ControllerInterface
  {
    public $registry;
    
    public function __construct()
    {
        $this->registry = Registry::getInstance();
    }
    
  }
