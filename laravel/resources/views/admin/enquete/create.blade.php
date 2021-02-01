@extends('layouts.app')
@section('content')
<style>
    header { margin-top: 30px; color: #43A047; }
    hr { border-width: 3px;border-color: #43A047; }
    h1 { font-size: 25px;font-weight: bold;margin: 0;text-align: center; }
    .align-light { text-align: right; }
    .form-group { margin-bottom: 35px; }
    footer p { text-align: center; }
    input:required { background: #ffcdd2; }
    input[type="email"]:invalid { background: #ffcdd2; }
    input:valid { background: transparent; }
    input:focus { background: #DCEDC8; }
</style>

<div class="container">
    <form action="#" method="" class="row">
        <div class="col-sm-8 col-sm-offset-2">
               
            <button type="button" onclick="history.back()" class="btn btn-secondary">戻る</button>
            <button type="submit" class="btn btn-success">作成する</button>
        </div>
    </form>
</div>
@endsection
