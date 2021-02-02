@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">アカウント新規追加</div>
                <div class="card-body">
                    {{-- <form method="POST" action="{{ action('AdminController@accountCreate') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name"><span class="badge badge-danger">必須</span>&nbsp;ユーザーIDを入力してください。</label>
                            <input id="name" type="text" name="name" class="form-control" required value="">
                        </div>
                        <div class="form-group">
                            <label for="full_name"><span class="badge badge-danger">必須</span>&nbsp;名前をフルネームで入力してください。</label>
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                            <a class="btn btn-secondary mr-1" href="{{ url('/admin/account/list') }}">戻る</a>
                                <button type="submit" class="btn btn-primary">
                                    {{ __('新規追加') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
