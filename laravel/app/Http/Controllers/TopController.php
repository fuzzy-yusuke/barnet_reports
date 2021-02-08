<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class TopController extends Controller
{
    public function index()
    {
        // 現在認証されているユーザー情報の取得
        $user = \Auth::user();

        // TODO: 新規登録後の挙動が変
        // TODO: まだユーザー登録は画面からしない想定
        // TODO: ロールによって画面遷移先を変えるがルーティングでやった方がいいかもしれない
        if ($user->Role::code === 0) {
            return view('user.top');
        } elseif ($user->Role::code === 1) {
            return view('admin.top');
        } elseif (!$user->Role::code) {
            return view('user.top');
        } else {
            Auth::logout();
        }
    }

}
