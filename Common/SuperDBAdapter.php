<?php
namespace Common;

class SuperDBAdapter implements DBAdapterInterface
{
    
    protected $dataBase = [];
    
    public function insert ($data){
        foreach ($this->dataBase as $key => $record) {
            if ($record[0] == $data[0]) {
                $this->dataBase[$key] = $data;
                return; 
            }
        }
        $this->dataBase[] = $data;
    }
    public function load($id)
    {
        foreach ($this->dataBase as $record) {
            if ($record[0] == $id) {
                return $record; 
            }
        } 
        
        return null;   
    }
}