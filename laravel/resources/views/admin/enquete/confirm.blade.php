@extends('layouts.app')
@section('content')
<div class="container">
    {{ Form::open(['method'=>'POST','route' => 'admin.questionStore']) }}
    {{ Form::token() }}
    <div class="col-sm-8 col-sm-offset-2">
        <h4 class="mb-3">この内容でアンケートを作成しますか？</h4>
        <label>アンケート名</label>
        {{ $questions['code']}}
        {{ Form::hidden('code',$questions['code']) }}

        <table class="table table-striped">
            <tr>
                <th scope="col">No.</th>
                <th scope="col">質問内容</th>
                <th scope="col">回答形式</th>
                <th scope="col">必須</th>
                <th scope="col">回答選択肢</th>
            </tr>
            <div class="form-group">
                @foreach ($questions as $question)<tr>
                    <td>{{1}}</td>
                    <td>{{ $question['content'][0] }}</td>
                    <td>{{ $question['formtypes'][0] }}</td>
                    <td>{{ $question->content }}</td>
                    {{--<td>{{ 必須 }}</td>--}}
                    {{--<td>
                        <div>{{ $question['item_content1'] }}</div>
                        <div>{{ $question['item_content2'] }}</div>
                        <div>{{ $question['item_content3'] }}</div>
                        <div>@if(! $question['item_content4'] = ""){
                            {{ $question['item_content4'] }}
                            }
                            @endif
                        </div>
                        <div>@if(! $question['item_content5'] = ""){
                            {{ $question['item_content5'] }}
                            }
                            @endif
                        </div>
                    </td>--}}
                    </tr>
                    @endforeach
        </table>
        <button type="submit" class="btn btn-success">はい</button>
        <a class="btn btn-secondary mr-1" href="{{ route('admin.questionCreate') }}">いいえ</a>
    </div>
    {{ Form::close() }}
</div>
</div>
@endsection
