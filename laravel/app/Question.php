<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{

    // テーブル名を明示的に指定（必要はないが可読性向上の為）
    protected $table = 'questions';

    // 書き換えることが出来るカラムをホワイトリスト形式で指定
    protected $fillable = [
        'code',
        'form_code',
        'user_code',
        'selectable_item',
        'item_content1',
        'item_content2',
        'item_content3',
        'item_content4',
        'item_content5',
        'content'
    ];

    // timestampの自動更新を利用する
    public $timestamps = true;

    // ==============================
    // リレーション定義
    // ==============================

    public function user_code()
    {
        //ユーザーコードはUsersテーブルを参照
        return $this->belongsTo('App\User');
    }

    public function form_code()
    {
        //フォームコードはform_typesテーブルを参照
        return $this->belongsTo('App\FormType');
    }

}
