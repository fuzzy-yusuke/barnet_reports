@extends('layouts.app')
@section('content')
<div class="container">
    <form action="#" method="post" class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h4 class="mb-3">この内容で回答しますか？</h4>
            <!--以下、質問を登録次第実装-->
            @foreach ($items as $key => $item)

            <button type="submit" class="btn btn-success">はい</button>
            <a class="btn btn-secondary mr-1" href="{{ route('user.answerIndex') }}">いいえ</a>
        </div>
    </form>
</div>
@endsection