<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question_code()
    {
        //質問コードはQuestionsテーブルを参照
        return $this->belongsTo('App\Question');
    }

    public function user_code()
    {
        //ユーザーコードはUsersテーブルを参照
        return $this->belongsTo('App\User');
    }
}
