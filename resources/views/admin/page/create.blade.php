@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">新增页面</div>
            <div class="card-body">
                <form action="{{ url('admin/pages') }}" method="post">
                    @include('admin/page/components/edit-form')
                    <a class="btn btn-outline-secondary float-right" href="{{ url('admin/pages') }}">返回</a>
                </form>
            </div>
        </div>
    </div>
@endsection
