<?php

class SendMail
{
    public function handle($event)
    {
        // Send
        send($event->email, $event->name);
    }
}
