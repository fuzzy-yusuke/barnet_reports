<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //所属テーブルから取得させる
    public static function selectrole()
    {
        $roles=Role::all();
        $list=array();
        $list+=array(""=>"選択");
        foreach($roles as $role){
            $list+=array($role->name=>$role->name);
        }
        return $list;
    }
}
