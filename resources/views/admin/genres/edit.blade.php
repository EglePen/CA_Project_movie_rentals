@extends('admin.layouts.document', ['title' => Str::title(__('app.genres'))])

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">@langTitle('app.new') [{{($model->name ?? '') }}][{{($model->id ?? '') }}]</h3>
    </div>
    <form action="{{ route('admin.genres.update', $model) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ ($model->id ?? '') }}">
        <div class="card-body">
            <div class="form-group">
                <label for="name">@langTitle('app.name')</label>
                <input type="text" class="form-control" name="name" value="{{ ($model->name ?? '') }}" id="name" placeholder="@lang('app.name')">
            </div>

            <div class="form-group">
                <label for="description">@langTitle('app.description')</label>
                <input type="text" class="form-control" name="description" value="{{ ($model->description ?? '') }}" id="description" placeholder="@lang('app.description')">
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
        </div>
    </form>
</div>

@endsection