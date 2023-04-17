@extends('front.layouts.document')

@section('content')
<section>
    <div class="movie-cards">
        @foreach ($searchModels as $model)
   
            <article class="movie-card">
                <img src="{{asset('storage/images/' . ($model->image ?? ''))}}">
                <h2>
                    {{ ($model->title ?? '') }}
                </h2>
                <div class="movie-card-body">
                    <div class="movie-card-details">
                        <div>
                            <span>@langTitle('app.release_date'):</span>
                            <span>{{ ($model->release_date ?? '') }}</span>
                        </div>
                        <div>
                            <span>@langTitle('app.runtime'):</span>
                            <span>{{ ($model->runtime ?? '')}} {{trans('app.min')}}</span>
                        </div>
                        <div>
                            <span>@langTitle('app.rating'):</span>
                            <span>{{ ($model->rating ?? '') }}</span>
                        </div>
                        <div>
                            <span>@langTitle('app.genres'):</span>
                            <span>{{ ($model?->genres->pluck('name')->implode(', ')) }}</span>
                        </div>
                    </div>
                    <button class="btn-more">
                        <a href="{{route('front.movies.show', $model)}}">@lang('app.see_more')</a>
                    </button>
                </div>
            </article>
        @endforeach
    </div>
</section>
@endsection