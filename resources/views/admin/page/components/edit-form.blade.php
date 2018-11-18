{{ csrf_field() }}

@foreach ($errors->all() as $error)
    <p class="alert alert-danger">
        {{ $error }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </p>
@endforeach

<div class="form-group">
    <label>名称</label>
    <input class="form-control" type="text" name="name" value="{{ $page->name }}">
</div>

<div class="form-group">
    <label>标题</label>
    <input class="form-control" type="text" name="title" value="{{ $page->title }}">
</div>

<div class="form-group">
    <label>自定义 URL</label>
    <input class="form-control" type="text" name="slug" value="{{ $page->slug }}">
</div>

<div class="form-group">
    <label>模版</label>
    <input class="form-control" type="text" name="view" value="{{ $page->view }}">
</div>

<div class="form-group">
    <label>内容</label>
    <textarea class="form-control" rows="10" name="content">{{ $page->content }}</textarea>
</div>

<button class="btn btn-primary" type="submit">保存</button>
