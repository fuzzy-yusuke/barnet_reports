<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Question;
use App\Form;
use App\FormType;

class QuestionController extends Controller
{
        //一般ユーザー側
        public function answerIndex()
    {
        // TODO: １回分のアンケート（codeが同一値）whereは仮
        $items = Question::where('code', 2)->get();

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
        $items = Question::where('code', 2)->get();
        return view('admin.enquete.list')->with('items', $items);
    }

    public function questionCreate(Request $request)
    {
        $question=new question;
        $form_code=FormType::select('name')->get();
        return view('admin.enquete.create',compact('form_code'));
    }
    public function questionStore(Request $request)
    {
        $question=new question;
        $form_code=FormType::id();
        //作成したアンケートをDBに保存
        $question->content=request('content');
        $question->form_code=$form_code->id;
        $question->item_content1=request('item_content1');
        $question->item_content2=request('item_content2');
        $question->item_content3=request('item_content3');
        $question->item_content4=request('item_content4');
        $question->item_content5=request('item_content5');
        return redirect()->route('admin.questionList')->with('form_code',$form_code);
        
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
        return view('admin.enquete.edit')->with('Question',Question::all());
    }
    public function questionUpdate(Request $request)
    {
        $data = $request->all();
        $user = Question::all();
        $user->fill($data)->save();
        return redirect()->route('admin.questionIndex');
    }
}
    