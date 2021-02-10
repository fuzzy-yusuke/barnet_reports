<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Admin
{
    private $auth;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(empty(auth()->user())){
            return redirect()->route('login');
        }

        //権限のチェック
        if(auth()->user()->role_name === '管理者'){
            $this->auth=true;
        }else{
            $this->auth=false;
        }

        //ログインユーザーが管理者の場合、管理者用のトップページを表示
        if($this->auth===true){
            return $next($request);
        }

        //それ以外は一般ユーザー用のトップページへ
        return view('user.top');
    }
}
