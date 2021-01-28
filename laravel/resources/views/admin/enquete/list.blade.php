@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="mb-3">アンケート回答</div>
            <table class="table table-striped">
                <tr>
                    <th scope="col">更新日</th>
                    <th scope="col">タイトル</th>
                </tr>
                @for ($i = 0; $i<=20; $i++)
                <tr>
                    <td>2020/12/01</td>
                    <td><a href="{{ url('/user/enquete/index') }}">アンケート①</a></td>
                </tr>
                @endfor
            </table>
            <button type="button" onclick="history.back()" class="btn btn-secondary">戻る</button>
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection
