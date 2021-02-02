@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mb-3">管理者メニュー</div>
            <ul>
                <li><a href="{{ route('admin.questionList') }}">アンケート一覧</a></li>
                <li><a href="{{ route('admin.accountList') }}">アカウント一覧</a></li>
                <li><a href="{{ url('/admin/result/list') }}">回答済みアンケート参照</a></li>
            </ul>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection