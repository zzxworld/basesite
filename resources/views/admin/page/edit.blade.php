@extends('layouts.admin')

@section('content')

    <h1>编辑页面</h1>

    <div class="form-group">
        <a class="btn btn-outline-secondary" href="{{ url('admin/pages') }}">返回</a>
    </div>

    <form action="{{ url('admin/pages/'.$page->id) }}" method="post">
        @method('PUT')
        @include('admin/page/components/edit-form')
    </form>

@endsection
