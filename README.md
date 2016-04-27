# silverstripe-event-dispatch
Silverstripe integration of walmsles/event-dispatch PHP module.  

# Maintainer Contact
- Michael Walmsley (michael.walmsley@outlook.com)

# Requirements
- Silverstripe 3.3 (earlier versions probably OK but not tested)

# Installation
> composer install walmsles/silverstripe-event-dispatch

# Documentation
A nice decoupled event dispatch model integrated into Silverstripe using a publish/subscribe mechanism.

Event Module allows registration of listeners to arbitrary events which can be fired anywhere and at anytime.  Listeners are any valid **callable** PHP structure as defined by PHP's [call_user_func_array](http://php.net/manual/en/function.call-user-func-array.php).
e.g. Closure, function name, array definining Class instance and method (`array($this, 'myMethod')`)

```
EventDispatch::subscribe('myEvent', function($myData1, $myData2) {
    // so somehting with $myData
    
    return $myData1 . ' ' . $myData2;
});

EventDispatch::dispatch('myEvent', array('event data', 'event data 2');
```

