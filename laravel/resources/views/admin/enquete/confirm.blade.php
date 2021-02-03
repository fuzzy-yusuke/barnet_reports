@extends('layouts.app')
@section('content')
<div class="container">
    <form method="POST" action="{{ route('admin.questionComplete') }}">
        {{ Form::token()}}
        <div class="col-sm-8 col-sm-offset-2">
            <h4 class="mb-3">この内容でアンケートを作成しますか？</h4>
                <label>アンケート名</label>
                {{ $question['code']}}
                {{ Form::hidden('code',$question['code'])}}

            <button type="submit" class="btn btn-success">はい</button>
            <a class="btn btn-secondary mr-1" href="{{ route('user.answerIndex') }}">いいえ</a>
        </div>
    </form>
</div>
@endsection