@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h2 class="mb-3">下書き一覧</h2>
            <div class="d-flex bd-highlight mb-3">
                <div>
                    <button type="button" href="{{ route('admin.top') }}" class="btn btn-secondary">戻る</button>
                </div>
            </div>
            <table class="table table-striped">
                <tr>
                    <th scope="col">更新日</th>
                    <th scope="col">タイトル</th>
                    <th scope="col" class="text-center">操作</th>
                </tr>
                @foreach ($draftLists as $key => $draftList)
                <tr>
                    <td>{{$draftList->updated_at}}</td>
                    <td><a href="{{ route('admin.questionEdit') }}">{{$draftList->code}}</a></td>
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
