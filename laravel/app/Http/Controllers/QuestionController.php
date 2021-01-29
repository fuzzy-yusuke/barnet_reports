<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //アンケート
    public function questionList()
    {
        // TODO: where 2 は仮 question_codeが同一の値のレコードを取得
        $items = \App\Question::where('code', 2)->get();
        return view('user.enquete.list')->with('items', $items);
    }

    public function questionIndex()
    {
        // TODO: １回分のアンケート（codeが同一値）whereは仮
        $items = \App\Question::where('code', 2)->get();

        $itemsArray = $items->toArray();

        // use Illuminate\Support\Facades\DB;
        // $itemsArray = DB::table('questions')->where('code', 2)->get();
        // dd($itemsArray);

        return view('user.enquete.index')->with('items', $items)->with('itemsArray', $itemsArray);


    }
}
