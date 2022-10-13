<?php

use Exception;
use UserRegister;

use Service/Exception;
use Service/SendMail;

class Handler
{
    protected $listen = [
        Exception::class => [
            Exception::class,
        ],

        UserRegister::class => [
            SendMail::class,
        ],
    ];
}