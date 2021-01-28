<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// 論理削除有効化
use Illuminate\Database\Eloquent\SoftDeletes;

class Accounts extends Authenticatable
{
    // 論理削除有効化 ： Eloquentのdestroy,delete methodをした際に論理削除されるようになります。
    use SoftDeletes;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'name',
        'role_name',
        'mail',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /*protected $hidden = [
        'password', 'remember_token',
    ];*/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_date' => 'datetime',
    ];

    // timestampの自動更新を利用する
    public $timestamps = true;

    // ==============================
    // リレーション定義
    // ==============================
}
