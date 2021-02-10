<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;
use App\User;
use App\Role;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }


    public function top(){
        return view('admin.top');
    }

    public function accountList()
    {
        $accountLists = User::orderBy('id', 'desc')->paginate(10);
        return view('admin.account.list')->with('accountLists', $accountLists);
    }

    /*public function accountCreate()
    {
        return view('admin.account.create');
    }

    public function accountStore(Request $req)
    {
        $user = new User;
        $user->fill($req->all());
        $user->save();
        return redirect('admin.account.list');
    }*/

    public function accountEdit(Request $request, $id, user $user)
    {
        //usersテーブルから、特定のidのアカウントを取得する
        $user = User::findOrFail($id);
        //rolesテーブルから部署データを取得する
        $roles = Role::get();
        return view('admin.account.edit',compact('roles'))
        ->with('name','')
        ->with('user', $user);
    }

    public function accountUpdate(Request $request, $id, user $user)
    {
        //$data = $request->all();
        $user = User::findOrFail($id);
        $user->code = $request->code;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role_name = $request->role_name;
        $user->save();
        //アカウント一覧画面へリダイレクト
        return redirect()->route('admin.accountList');
    }
    public function accountComplete()
    {
        return view('admin.account.complete');
    }
}
