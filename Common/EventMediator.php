<?php
 namespace Common;
 
class EventMediator implements EventMediatorInterface{

    private $events = [];
    private $listeners = [];

    public function publish($event) {
        $event = strtolower(trim($event));
        if(!isset($this->events[$event])) {
            $this->events[$event] = 1;
        }
        return $this;
    }

    public function subscribe($object, $event, $callback) {
        $event = strtolower(trim($event));
        $subscriber = new \stdClass();
        $subscriber->event = $event;
        $subscriber->callback = $callback;
        $subscriber->object = $object;
        $this->listeners[] = $subscriber;
        return $this;
    }

    public function trigger($event, $data = null) {
        
        $event = strtolower(trim($event));
        if(!isset($this->events[$event])) {
            return false;
        }
        
        foreach($this->listeners as $listener) {
            if ($listener->event == $event) {
                $function =   $listener->callback;
                $listener->object->$function($data);
            }
        }

        return true;
    }
}