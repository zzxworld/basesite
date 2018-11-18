@extends('layouts.admin')

@section('content')

    <h1>编辑页面</h1>

    <div class="form-group">
        <a class="btn btn-outline-secondary" href="{{ url('admin/pages') }}">返回</a>
        <form action="{{ url('admin/pages/'.$page->id) }}" method="post">
            {{ csrf_field() }}
            @method('DELETE')
            <button class="btn btn-danger float-right" type="submit">删除页面</button>
        </form>
    </div>

    <form action="{{ url('admin/pages/'.$page->id) }}" method="post">
        @method('PUT')
        @include('admin/page/components/edit-form')
    </form>

@endsection

@section('head')
    <style type="text/css" media="screen">
    .form-group form {
        display: inline;
    }
    </style>
@endsection

@section('foot')
    <script charset="utf-8" defer="defer">
        document.querySelector('.btn-danger').addEventListener('click', event => {
            event.preventDefault()
            if (confirm('确定要删除此页面吗?')) {
                event.target.parentNode.submit()
            }
        })
    </script>
@endsection

