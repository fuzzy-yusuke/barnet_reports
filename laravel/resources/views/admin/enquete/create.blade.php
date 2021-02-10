@extends('layouts.app')
@section('content')

    <script src="{{ asset('js/select.js') }}" defer></script>
    <div class="container">
        {{ Form::open(['route' => 'admin.questionConfirm']) }}
        <div class="col-sm-8 col-sm-offset-2">
            <div class="card" style="width: 150%;">
                <div class="card-header">アンケート新規作成</div>
                <div class="card-body">
                    <h1>{{ Form::text('code', null, ['placeholder' => 'アンケート名']) }}</h1>
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">質問内容</th>
                            <th scope="col">回答形式</th>
                            <th scope="col">必須</th>
                            <th scope="col">回答選択肢</th>
                        </tr>
                        {{ Form::token() }}
                        <div class="form-group">
                            @for ($i = 1; $i <= 3; $i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ Form::text('content[]', null, ['row' => 50, 'placeholder' => '調子はいかがですか']) }}
                                    </td>
                                    <td>
                                        {{--@php
                                            $formtypes=App\FormType::selectlist();
                                        @endphp--}}
                                        <!-- onchange="changefujii();" -->
                                        <select class="form-control" id="formtypes{{$i}}" name="formtypes[]">
                                            <option value="">選択</option>
                                            @foreach ($formtypes as $formtype)
                                            <option value={{$formtype->id}}>{{ $formtype->name }}</option>
                                            @endforeach
                                        </select>
                                        @php
                                            $formname=$formtype->name;
                                        @endphp

                                        {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js">

                                            function change($formname){
                                                var element;
                                                if (document.getElementById($formname){
                                                    id = document.getElementById($formname).value;
                                                    if($formname == "テキストボックス"){
                                                    element = document.getElementById("item_content1");
                                                    element = document.getElementById("item_content2");
                                                    element = document.getElementById("item_content3");
                                                    element.disabled = true;
                                                    }else{
                                                        element.disabled = false;
                                                    }
                                                }

                                            }
                                            console.log(onchange);
                                        </script>--}}
                                    </td>
                                    <td>
                                        {{ Form::checkbox('must[]', '必須', false, ['id' => 'check-id', 'class' => 'form-check-input']) }}
                                        {{ Form::label('must', '必須', ['class' => 'form-check-label']) }}
                                    </td>
                                    <td>
                                        <div>
                                            <input class="form-control" id="item_content1" placeholder="回答欄1" name="item_content1" type="text" disabled="disabled">
                                        </div>
                                        <div>
                                            {{ Form::text('item_content2', null, ['placeholder' => '回答欄2', 'disabled' => 'disabled']) }}
                                        </div>
                                        <div>
                                            {{ Form::text('item_content3', null, ['placeholder' => '回答欄3', 'disabled' => 'disabled']) }}
                                        </div>
                                        <div>
                                            {{ Form::text('item_content4', null, ['placeholder' => '回答欄4', 'disabled' => 'disabled']) }}
                                        </div>
                                        {{ Form::text('item_content5', null, ['placeholder' => '回答欄5', 'disabled' => 'disabled']) }}
                                    </td>
                                </tr>
                            @endfor
                    </table>
                </div>

                <div>
                    {{ Form::label('content', '自由記入欄のタイトル：') }}
                    {{ Form::text('content[]', null, ['row' => 50]) }}
                </div>
            </div>
            {{ Form::button('作成する', ['type' => 'submit', 'class' => 'btn btn-success']) }}
            {{ Form::button('下書き', ['type' => 'button', 'class' => 'btn btn-info']) }}
            <a class="btn btn-secondary" href="{{ route('admin.questionList') }}">戻る</a>
            {{ Form::close() }}
            </form>
        </div>
    @endsection
