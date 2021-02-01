@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">アンケート編集</div>
                <div class="card-body">
                    <form method="POST" action="{{ action('AdminController@questionUpdate') }}">
                        @csrf
                        <div class="form-group">
                            
                        </div>
                        <a class="btn btn-secondary" href="{{ route('question.list') }}">戻る</a>
                        <button type="submit" class="btn btn-success">更新</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
