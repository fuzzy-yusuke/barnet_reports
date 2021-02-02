@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">アカウント情報</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="staticName" class="col-sm-2 col-form-label">ユーザー名</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticName" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $user->email }}">
                        </div>
                    </div>
                    <button type="button" onclick="history.back()" class="btn btn-secondary">戻る</button>
                    <a href="{{ action('UserController@accountEdit') }}"><button class="btn btn-success">編集</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection