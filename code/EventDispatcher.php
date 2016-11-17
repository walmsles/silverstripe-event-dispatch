<?php


use walmsles\EventDispatch\Dispatcher;

/**
 * Class EventDispatch
 */
class EventDispatcher
{
    
    /** @var  Dispatcher */
    private static $instance;

    public static function inst()
    {
        if (is_null(EventDispatcher::$instance)) {
            EventDispatcher::$instance = new Dispatcher();
        }

        return EventDispatcher::$instance;
    }

    /**
     * EventDispatcher constructor - protected so object not able to be created.
     */
    protected function __construct()
    {
        // do nothing
    }
    
    /**
     * Forward all static calls such as EventDispatcher::subscribe()
     */
    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array(array(self::inst(), $name), $arguments);
    }


}
