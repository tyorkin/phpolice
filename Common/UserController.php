<?php
namespace Common;

class UserController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function test()
    {
        $mediator = new EventMediator();
        $this->registry->set('userService', new UserService($mediator));
        $this->registry->set('mailService', new MailService($mediator));
        $this->registry->get('userService')->createUser('Vasiliy');
    }
}
