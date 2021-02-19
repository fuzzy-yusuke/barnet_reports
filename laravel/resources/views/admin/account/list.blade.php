@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex bd-highlight mb-3">
                <div class="p-2 bd-highlight"><a class="btn btn-secondary" href="{{ route('admin.top') }}">戻る</a></div>
                @if (Route::has('register'))
                <div class="ml-auto p-2 bd-highlight">
                    <a class="btn btn-secondary" href="{{ route('register') }}">新規作成</a>
                </div>
                @endif

            </div>
            <div class="mb-3">アカウント一覧</div>
                <table class="table table-sm">
                    <tr>
                        <th scope="col">ユーザーID</th>
                        <th scope="col">氏名</th>
                        <th scope="col">所属</th>
                        <th scope="col">メールアドレス</th>
                        <th scope="col">作成日</th>
                        <th scope="col" class="text-center">操作</th>
                    </tr>
                    @foreach ($accountLists as $accountList)
                    <tr>
                        <td>{{$accountList->code}}</td>
                        <td>{{$accountList->name}}</td>
                        <td>{{$accountList->role->name}}</td>
                        <td>{{$accountList->email}}</td>
                        <td>{{$accountList->created_at}}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                            <a href="{{ action('AdminController@accountEdit', $accountList->id) }}" type="button" class="btn btn-info">編集</a>
                            <a href="" type="button" class="btn btn-danger ml-1">削除</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="paginate">
            {{ $accountLists->links() }}
            </div>

        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection
