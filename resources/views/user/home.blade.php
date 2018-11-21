@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 text-center">
            <h1>{{ Auth::user()->name }}</h1>

            <a class="btn btn-link" href="{{ url('user/change_password') }}">修改密码</a>

            @if (Auth::user()->isAdmin)
                <a class="btn btn-link" href="{{ url('admin/users') }}">用户管理</a>
                <a class="btn btn-link" href="{{ url('admin/pages') }}">页面管理</a>
                <a class="btn btn-link" href="{{ url('admin/comments') }}">评论管理</a>
            @endif
        </div>
    </div>
</div>
@endsection
