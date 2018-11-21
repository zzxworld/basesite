@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">编辑页面</div>
            <div class="card-body">
                <form action="{{ url('admin/pages/'.$page->id) }}" method="post">
                    @method('PUT')
                    @include('admin/page/components/edit-form')
                    <button class="btn btn-danger float-right" type="button">删除页面</button>
                    <a class="btn btn-outline-secondary float-right" href="{{ url('admin/pages') }}">返回</a>
                </form>
                <form id="delete-form" action="{{ url('admin/pages/'.$page->id) }}" method="post">
                    {{ csrf_field() }}
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
@endsection

@section('head')
    <style type="text/css">
    .form-group form {
        display: inline;
    }
    .btn-danger {
        margin-left: 0.5em;
    }
    </style>
@endsection

@section('foot')
    <script charset="utf-8" defer>
        $(() => {
            $('button.btn-danger').on('click', e => {
                if (!confirm('确定要删除此页面吗?')) {
                    return;
                }

                $('form#delete-form').submit();
            });
        });
    </script>
@endsection

