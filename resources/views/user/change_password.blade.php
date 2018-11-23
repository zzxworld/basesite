@extends('layouts.app')

@section('title', '修改登录密码')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">修改登录密码</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('user/change_password') }}">
                        @csrf

                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label text-md-right">旧密码</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control{{ $errors->has('old_password') ? ' is-invalid' : '' }}" name="old_password" value="{{ old('old_password') }}" required autofocus>

                                @if ($errors->has('old_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">新密码</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control{{ $errors->has('new_password') ? ' is-invalid' : '' }}" name="new_password" required>

                                @if ($errors->has('new_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">确认新密码</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control{{ $errors->has('confirm_new_password') ? ' is-invalid' : '' }}" name="confirm_new_password" required>

                                @if ($errors->has('confirm_new_password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('confirm_new_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">确定修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
