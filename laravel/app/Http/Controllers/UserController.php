<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// models
use App\Role;

class UserController extends Controller
{   //一般ユーザーのコントローラ
    public function top()
    {
        return view('user.top');
    }

    public function accountIndex()
    {
        // 現在認証されているユーザー情報を取得しビューに渡す
        return view('user.account.index')->with('user', \Auth::user());
    }

    public function registUser(){

        $roles = Role::get();
        return view('auth/register',compact('roles'))
        ->with('id','')
        ->with('name','');

    }
}
