<?php

use Listener/Exception;

class User
{
    public function create($data)
    {
        try{
            // DB保存が成功した設定
            return $data; // 保存したユーザ情報を返す
        }cache($e){
            event(new ExceptionListener(['message' => $e->message, 'address' => 'User::store']));
            throw $e;
        }
    }
}
