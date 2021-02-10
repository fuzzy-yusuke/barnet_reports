@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h2 class="mb-3">アンケート一覧</h2>
            <div class="d-flex bd-highlight mb-3">
                <div>
                    <button type="button" onclick="history.back()" class="btn btn-secondary">戻る</button>
                </div>
                <div class="ml-auto p-2 bd-highlight">
                    <a class="btn btn-success" href="{{ route('admin.questionCreate') }}">新規作成</a>
                </div>
            </div>
            <table class="table table-striped">
                <tr>
                    <th scope="col">更新日</th>
                    <th scope="col">タイトル</th>
                    <th scope="col" class="text-center">操作</th>
                </tr>
                @foreach ($questionLists as $key => $questionList)
                <tr>
                    <td>{{$questionList->updated_at}}</td>
                    <td><a href="{{ route('admin.questionEdit') }}">{{$questionList->code}}</a></td>
                    <td class="text-center">
                        <div class="btn-group btn-group" role="group" aria-label="button group">
                            <a href="" type="button" class="btn btn-danger ml-1">削除</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection
