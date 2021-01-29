@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <a class="btn btn-secondary mb-3" href="{{ route('user.top') }}">戻る</a>
            <h2 class="mb-3">アンケート一覧</h2>
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
        </div>
        <div class="col">
            <div id="example"></div>
        </div>
    </div>
</div>
@endsection
