<?php

use Models/User;
use Listener/Exception;
use Listener/RegisterUser;

class UserController 
{
    // ユーザ登録だけを行い、その後の処理をイベントハンドラを経由して行われる処理に任せる
    public function register(Request $request){
        $this->validate($request->all(),
        [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:12|confirmed',
        ]);

        try{
            User::create($request->all());
        }catch($e)
        {
            event(new Exception(['message' => $e->message, 'address' => 'UserController::register']));
        }

        event(new RegisterUser($user));

        // ログインして、ダッシュボートへリダイレクトしている想定

        return redirect('dashbord');
    }
}