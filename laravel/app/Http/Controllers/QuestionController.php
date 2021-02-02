<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
        //一般ユーザー側
        public function answerIndex()
    {
        // TODO: １回分のアンケート（codeが同一値）whereは仮
        $items = \App\Question::where('code', 2)->get();

        $itemsArray = $items->toArray();

        // use Illuminate\Support\Facades\DB;
        // $itemsArray = DB::table('questions')->where('question_group', 2)->get();
        // dd($itemsArray);

        return view('/user.enquete.index')->with('items', $items)->with('itemsArray', $itemsArray);

    }
    public function answerConfirm(Request $request)
    {
        //質問
        $question = $request->content;
        //回答
        $answer = $request->answer;
        //確認画面に表示する値を格納
        $confirm_data = [
            'content' => $question,
            'answer' => $answer
        ];
        return view('user.enquete.confirm')->with('confirm_data',$confirm_data);
    }

    public function answerComplete()
    {
        return view('user.enquete.complete');
    }
    
    //管理者側
    public function questionList()
    {
        // TODO: where 2 は仮 question_codeが同一の値のレコードを取得
        $items = \App\Question::where('code', 2)->get();
        return view('admin.enquete.list')->with('items', $items);
    }

    public function questionCreate()
    {
        return view('admin.enquete.create');
    }
    public function questionStore(Request $request)
    {
        
    }
    public function questionConfirm(Request $request)
    {
        //質問
        $question = $request->content;
        //回答
        $answer = $request->answer;
        //確認画面に表示する値を格納
        $confirm_data = [
            'content' => $question,
            'answer' => $answer
        ];
        return view('admin.enquete.confirm')->with('confirm_data',$confirm_data);
    }

    public function questionComplete()
    {
        return view('admin.enquete.complete');
    }
    public function questionEdit()
    {
        return view('admin.enquete.edit')->with('Question',\app\Question::all());
    }
    public function questionUpdate(Request $request)
    {
        $data = $request->all();
        $user = \app\Question::all();
        $user->fill($data)->save();
        return redirect()->route('admin.questionIndex');;
    }
}
    