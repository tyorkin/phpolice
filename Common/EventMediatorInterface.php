<?php
 namespace Common;
 interface EventMediatorInterface
 {
     public function publish($event);
     public function subscribe($object, $event, $callback);
     public function trigger($event, $data = null);
 }