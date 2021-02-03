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
    <form method="POST" action="{{ route('admin.questionConfirm') }}">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="card">
                <div class="card-header">アンケート新規作成</div>
                <div class="card-body">
                    <h1>{{ Form::text('content',null,['placeholder' => 'アンケート名']) }}</h1>
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">質問内容</th>
                            <th scope="col">回答形式</th>
                            <th scope="col">必須</th>
                            <th scope="col">回答選択肢</th>
                        </tr>
                        {{ Form::open([ 'route' => 'admin.questionStore']) }}
                        {{ Form::token()}}
                        <div class="form-group">
                            @for ($i = 1; $i<=3; $i++) <tr>
                                <td>{{$i}}</td>
                                <td>{{ Form::text('content',null,['row' => 50,'placeholder' => '調子はいかがですか']) }}</td>
                                <td>{{ Form::select('formtypes',App\FormType::selectlist(),old('formtypes'),['class'=>'form-control','id'=>'formtypes','required'=>'required'] )}}
                                </td>
                                <td>
                                {{ Form::checkbox('check_name', '必須', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                {{ Form::label('check-id', '必須', ['class' => 'form-check-label']) }}
                                </td>
                                <td>
                                    <div>
                                        {{ Form::checkbox('check_name', 'item_content1', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::text('item_content1',null,['placeholder' => 'とても良い']) }}
                                    </div>
                                    <div>
                                        {{ Form::checkbox('check_name', 'item_content2', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::text('item_content2',null,['placeholder' => '良い']) }}
                                    </div>
                                    <div>
                                        {{ Form::checkbox('check_name', 'item_content3', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::text('item_content3',null,['placeholder' => '普通']) }}
                                    </div>
                                    <div>
                                        {{ Form::checkbox('check_name', 'item_content4', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::text('item_content4',null,['placeholder' => '悪い']) }}
                                    </div>
                                    {{ Form::checkbox('check_name', 'item_content5', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                    {{ Form::text('item_content5',null,['placeholder' => 'とても悪い']) }}
                                </td>
                                </tr>
                                @endfor
                    </table>
                </div>
                <div>
                    {{ Form::label('content','自由記入欄のタイトル：')}}
                    {{ Form::text('content',null,['row' => 50]) }}
                </div>
            </div>
            {{ Form::button('作成する',['type'=>"submit",'class'=>'btn btn-success'] )}}
            <a class="btn btn-secondary" href="{{ route('admin.questionList') }}">戻る</a>
            {{ Form::close()}}
    </form>
</div>
@endsection