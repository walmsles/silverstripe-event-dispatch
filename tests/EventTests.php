<?php

/**
 * Created by PhpStorm.
 * User: michaelwalmsley
 * Date: 27/04/2016
 * Time: 9:42 PM
 */
class EventTests extends PHPUnit_Framework_TestCase
{

    /**
     * Test Existence of EventDispatch
     */
    public function testEventDispatchCreate()
    {
        $dispatch = EventDispatch::inst();    
        $this->assertInstanceOf('EventDispatch', $dispatch);
    }
    
    
    
    
}