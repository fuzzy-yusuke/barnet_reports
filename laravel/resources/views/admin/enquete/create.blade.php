@extends('layouts.app')
@section('content')

    <script src="{{ asset('js/select.js') }}" defer></script>
    <div class="container">
        <form method="POST" action="{{ route('admin.questionConfirm') }}">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="card" style="width: 150%;">
                <div class="card-header">アンケート新規作成</div>
                <div class="card-body">
                    <h1><input class="form-control" type="text" id="code" placeholder="アンケート名" ])></h1>
                    <table class="table table-striped">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">質問内容</th>
                            <th scope="col">回答形式</th>
                            <th scope="col">必須</th>
                            <th scope="col">回答選択肢</th>
                        </tr>
                        @csrf
                        <div class="form-group" id="table">
                            @for ($i = 1; $i <= 3; $i++)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td><input class="form-control" type="text" id="content[]" name="content[]" row=50 placeholder="調子はいかがですか">
                                    </td>
                                    <td>
                                        <select class="form-control" id="formtypes{{ $i }}" name="formtypes{{ $i }}">
                                            <option value="">選択</option>
                                            @foreach ($formtypes as $formtype)
                                                <option value={{ $formtype->id }}>{{ $formtype->name }}</option>
                                            @endforeach
                                        </select>
                                        @php
                                            $formname = $formtype->name;
                                        @endphp
                                    </td>
                                    <td>
                                        <input type="checkbox" name="must[]" value="必須" id="check-id" class="form-check-input">
                                        <label for="must" class="form-check-label">必須</label>
                                    </td>
                                    <td>
                                        <div>
                                            <input class="form-control item_content{{$i}}" id="item_content1-{{$i}}" placeholder="回答欄1"name="item_content1" type="text" disabled="disabled">
                                        </div>
                                        <div>
                                            <input class="form-control item_content{{$i}}" id="item_content2-{{$i}}" placeholder="回答欄2"name="item_content2" type="text" disabled="disabled">
                                        </div>
                                        <div>
                                            <input class="form-control item_content{{$i}}" id="item_content3-{{$i}}" placeholder="回答欄3"name="item_content3" type="text" disabled="disabled">
                                        </div>
                                        <div>
                                            <input class="form-control item_content{{$i}}" id="item_content4-{{$i}}" placeholder="回答欄4"name="item_content4" type="text" disabled="disabled">
                                        </div>
                                        <input class="form-control item_content{{$i}}" id="item_content5-{{$i}}" placeholder="回答欄5"name="item_content5" type="text" disabled="disabled">
                                    </td>
                                </tr>
                            @endfor
                    </table>
                </div>

                <div>
                    <label for="content">自由記入欄のタイトル：</label>
                    <input type="text" name="content[]" row=50>
                </div>
            </div>
            <input value="作成する" type="submit" class="btn btn-success">
            <input value="下書き" class="btn btn-info w-auto mt-2">
            <a class="btn btn-secondary" href="{{ route('admin.questionList') }}">戻る</a>
            </form>
        </div>
    @endsection
