<?php


use walmsles\EventDispatch\Dispatcher;

/**
 * Class EventDispatch
 */
class EventDispatcher
{
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


}