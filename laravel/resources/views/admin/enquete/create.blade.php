@extends('layouts.app')
@section('content')
<style>
    header { margin-top: 30px; color: #43A047; }
    hr { border-width: 3px;border-color: #43A047; }
    h1 { font-size: 25px;font-weight: bold;margin: 0;text-align: center; }
    .align-light { text-align: right; }
    .form-group { margin-bottom: 35px; }
    footer p { text-align: center; }
    input:required { background: #ffcdd2; }
    input[type="email"]:invalid { background: #ffcdd2; }
    input:valid { background: transparent; }
    input:focus { background: #DCEDC8; }
</style>

<div class="container">
    <form action="#" method="" class="row">
        <div class="col-sm-8 col-sm-offset-2">
        <div class="card">
                <div class="card-header">アンケート新規作成</div>
                <div class="card-body">
                    {{-- <form method="POST" action="{{ action('AdminController@questionCreate') }}">
                        @csrf
                        <div class="form-group">
                            <label for="content"><span class="badge badge-danger">必須</span>&nbsp;質問したい内容を入力してください。</label>
                            <input id="name" type="text" name="name" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <input id="full_name" type="text" name="full_name" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="email"><span class="badge badge-danger">必須</span>&nbsp;Emailを入力してください。</label>
                            <input id="email" type="email" name="email" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label><span class="badge badge-danger">必須</span>&nbsp;割り当てる権限を選択してください。</label>
                            <select id="role_code" name="role_code" class="form-control" required>
                                <option value="">選択してください</option>
                                <option value="admin">管理者権限</option>
                                <option value="ordinary">一般ユーザー権限</option>
                            </select>
                        </div>
                        <a class="btn btn-secondary" href="{{ url('/admin/account/list') }}">戻る</a>
                        <button type="submit" class="btn btn-success">追加</button>
                    </form> --}}

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('氏名（フルネーム）') }}<span class="badge badge-danger ml-2">必須</span></label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Emailアドレス') }}<span class="badge badge-danger ml-2">必須</span></label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('初期パスワード') }}<span class="badge badge-danger ml-2">必須</span></label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('初期パスワード（確認）') }}<span class="badge badge-danger ml-2">必須</span></label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <button type="button" onclick="history.back()" class="btn btn-secondary">戻る</button>
            <button type="submit" class="btn btn-success">作成する</button>
        </div>
    </form>
</div>
@endsection
