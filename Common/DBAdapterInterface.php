<?php
namespace Common;

interface DBAdapterInterface
{
    public function insert($data);
    public function load($id);
}