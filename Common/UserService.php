<?php
namespace Common;

class UserService extends Service
{

    public function __construct(EventMediator $mediator = null)
    {
        parent::__construct($mediator);
        $this->mediator->publish('newUser');
    }
    
    public function createUser($name)
    {
        
        $userDomain = new UserDomain();
        $userDomain->setName($name);
        $a = ['name' => $userDomain->getName()];
        $userMapper = new UserDataMapper(new SuperDBAdapter());
        $userMapper->insert($userDomain);
        $this->mediator->trigger('newUser', $a);
    }
}
