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
        'content',
        'week_code'
    ];

    // timestampの自動更新を利用する
    public $timestamps = true;

    // ==============================
    // リレーション定義
    // ==============================

}
