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
        //新規アンケート回答
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
        //回答送信確認

        //質問
        $question = $request->content;
        //回答
        $answer = $request->answer;
        //確認画面に表示する値を格納
        $confirm_data = [
            'content' => $question,
            'answer' => $answer
        ];
        return view('user.enquete.confirm')->with('confirm_data', $confirm_data);
    }

    public function answerComplete()
    {
        return view('user.enquete.complete');
    }

    //管理者側
    public function questionList()
    {
        //作成したアンケートの一覧
        $questionLists = Question::orderby('updated_at', 'desc')->get()->groupby('code');
        // dd(count($questionLists));
        // dd($questionLists);
        $updateTime = \DB::select("select updated_at from questions where updated_at=(select max(updated_at) from questions as qs where questions.code=qs.code)");
        //dd($updateTime);
        //$results=array_merge_recursive($questionLists,$updateTime);
       //dd($results);
        return view('admin.enquete.list')->with('questionLists', $questionLists, 'updateTime', $updateTime);
    }

    public function questionDraftList()
    {
        //作成したアンケートの下書きを一覧で出す
        $draftLists = Question::groupby('code')
            ->where('status', '1')
            ->orderby('updated_at', 'desc')->get();
        return view('admin.enquete.draftlist')->with('draftLists', $draftLists);
    }

    public function questionCreate()
    {
        //アンケート新規作成
        $question = new question;
        $formtypes = FormType::get();
        return view('admin.enquete.create', compact('formtypes'))
            ->with('id', '')
            ->with('name', '');
    }

    public function questionStore(Request $request)
    {
        //作成したアンケートをDBに保存
        //dd($request);
        $question = new question;
        $question->code = request('code');
        //$form_code = FormType::find($request);
        $question->content = request('contents[]');
        $question->form_code = request('form_code');
        $question->must = $request->has('must');
        $question->item_content1 = request('item_content1');
        $question->item_content2 = request('item_content2');
        $question->item_content3 = request('item_content3');
        $question->item_content4 = request('item_content4');
        $question->item_content5 = request('item_content5');
        $question->save();
        return redirect()->route('admin.questionComplete');
    }



    public function questionEdit()
    {
        //作成済のアンケートを編集
        return view('admin.enquete.edit')->with('Question', Question::all());
    }

    public function questionUpdate(Request $request)
    {
        //編集した内容を書き換える
        $data = $request->all();
        $user = Question::all();
        $user->fill($data)->save();
        return redirect()->route('admin.questionIndex');
    }
}
