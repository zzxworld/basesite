@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">页面管理</div>
            <div class="card-body">
                <div class="form-group">
                    <a class="btn btn-outline-primary" href="{{ url('admin/pages/create') }}">新增页面</a>
                </div>

                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>概况</th>
                            <th width="100">模版</th>
                            <th width="120" class="text-center">更新时间</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pages as $page)
                        <tr>
                            <td>
                                <div><a href="{{ url('admin/pages/'.$page->id.'/edit') }}">{{ $page->name }}</a></div>
                                <code>{{ $page->slug }}</code>
                                <div class="text-muted">共 {{ mb_strlen($page->content) }} 个字。</div>
                            </td>
                            <td>{{ $page->view }}</td>
                            <td class="text-center">
                                <span>{{ $page->updated_at->format('Y-m-d') }}</span>
                                <span class="text-muted">{{ $page->updated_at->format('H:i:s') }}</span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
