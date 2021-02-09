@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">アカウント情報編集</div>
                    <div class="card-body">
                        <form method="POST" action="{{ action('AdminController@accountUpdate', $user->id) }}">
                            @csrf
                            <div class="form-group">
                                <label for="code">社員番号</label>
                                <div><input id="code" type="text" name="code" class="form-control"
                                        value="{{ $user->code }}"></div>
                            </div>
                            <div class="form-group">
                                <label for="name">ユーザー名</label>
                                <div><input id="name" type="text" name="name" class="form-control"
                                        value="{{ $user->name }}"></div>
                            </div>
                            <div class="form-group">
                                <label for="role_name">所属</label>
                                <div><select id="role_name" name="role_name" class="form-control"
                                        value="{{ $user->name }}">
                                        <option value="">選択してください</option>
                                        @foreach ($roles as $role)
                                            <option>{{ $role->name }}</option>
                                        @endforeach
                                    </select></div>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div><input id="email" type="text" name="email" class="form-control"
                                        value="{{ $user->email }}"></div>
                            </div>
                            <button type="submit" class="btn btn-success">更新</button>
                            <a class="btn btn-secondary" href="{{ route('admin.accountList') }}">戻る</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
