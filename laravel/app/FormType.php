<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FormType extends Model
{
    //質問形式テーブルから取得させる
    public static function selectlist()
    {
        $form_codes=FormType::all();
        $list=array();
        $list+=array(""=>"選択");
        foreach($form_codes as $form_code){
            $list+=array($form_code->name=>$form_code->name);
        }
        return $list;
    }
}
