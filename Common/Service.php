<?php
 namespace Common;
 
 use Common\ServiceInterface;
 use Common\EventMediator;
 
  abstract class Service implements ServiceInterface
  {
    public $mediator;
    
    public function __construct(EventMediator $mediator = null)
    {

        $this->mediator = $mediator ? $mediator : new EventMediator();
        
    }
    
    
  }
