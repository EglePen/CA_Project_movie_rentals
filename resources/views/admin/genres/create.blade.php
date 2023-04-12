@extends('admin.layouts.document', ['title' => Str::title(__('app.genres'))])

@section('content')


<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">@langTitle('app.new')</h3>
    </div>
    <form action="{{ route('admin.genres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">@langTitle('app.name')</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="@lang('app.name')">
            </div>
            <div class="form-group">
                <label for="name">@langTitle('app.description')</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="@lang('app.description')">
            </div>
            <div class="card-footer">
            <button type="submit" class="btn btn-primary">@langTitle('app.submit')</button>
        </div>
    </form>
</div>

@endsection