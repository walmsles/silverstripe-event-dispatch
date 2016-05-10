<?php

/**
 * Class EventDispatch
 */
class EventDispatch
{
    private static $instance;
    
    public static function inst() 
    {
        if(is_null(EventDispatch::$instance)) {
            EventDispatch::$instance = new EventDispatch();
        }
        
        return EventDispatch::$instance;
    }
}