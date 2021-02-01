@extends('layouts.app')
@section('content')
<div class="container">
    <form action="#" method="" class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <h4 class="mb-3">回答を送信しました。</h4>
            <a class="btn btn-secondary mr-1" href="{{ route('user.top') }}">トップに戻る</a>
        </div>
    </form>
</div>
@endsection