<?php
 namespace Common;
 interface DataMapperInterface
 {
     public function insert($data);
     public function load($id);
 }