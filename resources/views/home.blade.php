@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
 
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h2>ようこそ、{{ Auth::user()->fullname }}さん！</h2>
                    <h3><a href="/jissyu14">ログイン管理画面へ</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection