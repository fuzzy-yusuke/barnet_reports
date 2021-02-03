@extends('layouts.app')
@section('content')
<style>
    header {
        margin-top: 30px;
        color: #43A047;
    }

    hr {
        border-width: 3px;
        border-color: #43A047;
    }

    h1 {
        font-size: 25px;
        font-weight: bold;
        margin: 0;
        text-align: center;
    }

    .align-light {
        text-align: right;
    }

    .form-group {
        margin-bottom: 35px;
    }

    footer p {
        text-align: center;
    }

    input:required {
        background: #ffcdd2;
    }

    input[type="email"]:invalid {
        background: #ffcdd2;
    }

    input:valid {
        background: transparent;
    }

    input:focus {
        background: #DCEDC8;
    }

    .form-text {
        display: block;
        margin-top: 1.25rem;
        height: 50px;
    }
</style>

<div class="container">
    <form action="#" method="" class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="card">
                <div class="card-header">アンケート新規作成</div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">質問内容</th>
                            <th scope="col">回答形式</th>
                            <th scope="col">回答選択肢</th>
                        </tr>
                        {{ Form::open([ 'route' => 'admin.questionCreate']) }}
                        @csrf
                        <div class="form-group">
                            @for ($i = 1; $i<=3; $i++) <tr>
                                <td>{{$i}}</td>
                                <td>{{ Form::text('content',null,['row' => 50]) }}</td>
                                <td>{{ Form::select('selectEvaluate',['text'=>'テキストボックス','radio'=>'ラジオボタン'] )}}</td>
                                <td>
                                    <div>
                                        {{ Form::checkbox('check_name', 'とても良い', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::label('check-id', 'とても良い', ['class' => 'form-check-label']) }}
                                    </div>
                                    <div>
                                        {{ Form::checkbox('check_name', '良い', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::label('check-id', '良い', ['class' => 'form-check-label']) }}
                                    </div>
                                    <div>
                                        {{ Form::checkbox('check_name', '普通', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::label('check-id', '普通', ['class' => 'form-check-label']) }}
                                    </div>
                                    <div>
                                        {{ Form::checkbox('check_name', '悪い', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::label('check-id', '悪い', ['class' => 'form-check-label']) }}
                                    </div>
                                    {{ Form::checkbox('check_name', 'とても悪い', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                    {{ Form::label('check-id', 'とても悪い', ['class' => 'form-check-label']) }}
                                </td>
                                </tr>
                                @endfor
                    </table>
                </div>
                <div class="form-group">
                    {{ Form::textarea('free',null)}}
                </div>
            </div>
            {{ Form::button('作成する',['type'=>"submit",'class'=>'btn btn-success'] )}}
            <a class="btn btn-secondary" href="{{ route('admin.questionList') }}">戻る</a>
            {{ Form::close()}}
    </form>
</div>
@endsection