@extends('layouts.admin')

@section('content')

    <h1>新增页面</h1>

    <div class="form-group">
        <a class="btn btn-outline-secondary" href="{{ url('admin/pages') }}">返回</a>
    </div>

    <form action="{{ url('admin/pages') }}" method="post">
        @include('admin/page/components/edit-form')
    </form>

@endsection
