<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function accountEdit()
    {
        // 現在認証されているユーザー情報を取得しビューに渡す
        return view('user.account.edit')->with('user', \Auth::user());
    }

    public function accountUpdate(Request $request)
    {
        $data = $request->all();
        $user = \Auth::user();
        $user->fill($data)->save();
        return redirect()->route('user.accountIndex'); // TODO: フラッシュメッセージを出したい
    }
}
