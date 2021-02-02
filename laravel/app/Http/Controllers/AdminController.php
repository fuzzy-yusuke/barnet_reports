<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;
// use App\User;

class AdminController extends Controller
{
    public function top()
    {
        return view('admin.top');
    }

    public function accountList()
    {
        $accountLists = \App\User::orderBy('id', 'desc')->paginate(10);
        return view('admin.account.list')->with('accountLists', $accountLists);
    }

    public function accountCreate()
    {
        return view('admin.account.create');
    }

    public function accountStore(Request $req)
    {
        $user = new \App\User;
        $user->fill($req->all());
        $user->save();
        return redirect('admin.account.list');
    }

    public function accountEdit($id)
    {
        $user = \App\User::findOrFail($id);
        return view('admin.account.edit')->with('user', $user);
    }

    public function accountUpdate(Request $req)
    {
        $data = $req->all();
        $user = \App\User::user();
        $user->fill($data)->save();
        return redirect()->back();
    }
    public function accountComplete()
    {
        return view('admin.account.complete');
    }



}
