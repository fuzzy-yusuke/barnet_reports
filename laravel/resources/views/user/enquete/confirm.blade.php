@extends('layouts.app')
@section('content')
<div class="container">
    <form action="#" method="" class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h4 class="mb-3">この内容で回答しますか？</h4>
            <button type="submit" class="btn btn-success">はい</button>
            <a class="btn btn-secondary mr-1" href="{{ route('user.answerIndex') }}">いいえ</a>
        </div>
    </form>
</div>
@endsection