<?php
namespace Common;


class UserDataMapper implements DataMapperInterface
{
    protected $dbAdapter;
    public function __construct($dbAdapter)
    {
        $this->dbAdapter = $dbAdapter;
    }
    
    public function insert($userDomain)
    {
        $data = [];
        if (!$userDomain->getID()) {
            $data[0] = 0;
        }
        $data = $userDomain->getName();
        $this->dbAdapter->insert($data);    
    }
    
    public function load($id)
    {
        $this->dbAdapter->load('userID', $id);    
    }
}