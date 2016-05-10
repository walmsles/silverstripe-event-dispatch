<?php


/**
 * Include tested classes - required or phpunit fails :-(  Should not be the case!
 */
require __DIR__.'/../code/EventDispatcher.php';

/**
 * Class EventTests
 */
class EventDispatcherTest extends SapphireTest
{

    /**
     * Test Existence of EventDispatch
     */
    public function testEventDispatchCreate()
    {
        $dispatch = EventDispatcher::inst();
        $this->assertInstanceOf('walmsles\\EventDispatch\Dispatcher', $dispatch);

        // also test constructor is not public
        $reflection = new \ReflectionClass('EventDispatcher');
        $constructor = $reflection->getConstructor();
        $this->assertFalse($constructor->isPublic());
    }

}