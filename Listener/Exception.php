<?php

class RegisterUserMail
{
    // エラーハンドリングは今さら必要ないとは思うが、こういった使い方もできそうな覚書
    public $event;
    public function __construct($event)
    {
        $this->event = $event;
    }
}
