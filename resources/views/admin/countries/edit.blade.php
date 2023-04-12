@extends('admin.layouts.document', ['title' => Str::title(__('app.countries'))])

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">@langTitle('app.edit') [{{($model->name ?? '') }}][{{($country->id ?? '') }}]</h3>
    </div>
    <form action="{{ route('admin.countries.update', $model) }}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" value="{{ ($model->id ?? '') }}">
        <div class="card-body">
            <div class="form-group">
                <label for="name">@langTitle('app.name')</label>
                <input type="text" class="form-control" name="name" value="{{ ($model->name ?? '') }}" id="name" placeholder="@lang('app.name')">
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
        </div>
    </form>
</div>

@endsection