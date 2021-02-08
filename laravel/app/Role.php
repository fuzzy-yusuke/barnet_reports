<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //所属テーブルから取得させる
    protected $fillable = [
        'id','name'
    ];
}
