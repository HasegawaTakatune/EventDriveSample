<?php

class Exception
{
    // event
    //  message
    //  address
    public function handle($event)
    {
        Log::error("<<Error>> {$event->address} :: {$event->message}");
    }
}
