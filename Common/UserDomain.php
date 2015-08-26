<?php
 namespace Common;
 class UserDomain
 {
     protected $userID = 0;
     protected $userName = '';
     
     public function setID ($id)
     {
         $this->userID = $id;
     }
     
     public function getID ()
     {
         return $this->userID;
     }
     
     public function setName ($name)
     {
         $this->userName = $name;
     }
     
     public function getName ()
     {
         return $this->userName;
     }
     
     
 }