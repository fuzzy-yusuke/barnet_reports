@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="mb-3">メニュー</div>
            <ul>
                <li><a href='{{ route("user.accountIndex") }}'>マイアカウント</a></li>
                <li><a href='{{ route("user.questionList") }}'>アンケート回答</a></li>
                <li><a href='{{ route("user.questionList") }}'>アンケート回答履歴</a></li>
            </ul>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection
