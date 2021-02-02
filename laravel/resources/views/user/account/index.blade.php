@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">マイアカウント</div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="staticName" class="col-sm-2 col-form-label">ユーザー名</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticName" value="{{ $user->name }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-2 col-form-label">メールアドレス</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $user->email }}">
                        </div>
                    </div>
                    <a class="btn btn-secondary" href="{{ route('user.top') }}">戻る</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
