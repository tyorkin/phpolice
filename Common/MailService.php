<?php
namespace Common;

class MailService extends Service
{

    public function __construct(EventMediator $mediator = null)
    {
        parent::__construct($mediator);
        $this->mediator->subscribe($this, 'newUser', 'createNewUser');
    }
    
    public function createNewUser($params)
    {
        
        echo "Mail sent for 'New user created': {$params['name']}<br>";
    }
}
