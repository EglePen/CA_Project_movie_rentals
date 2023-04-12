@extends('front.layouts.document')

@section('content')
<section>
    <header>
        <h1>
            {{ Str::ucfirst(trans('app.movies')) }}
        </h1>
    </header>
   
    <div class="game-cards">
        @foreach ($models as $model)
   
            <article class="game-card game-card-hover">
                <a href="{{route('front.movies.show', $model)}}"></a>
                <header>
                    <img src="{{asset('storage/images/' . ($model->image ?? ''))}}">
                    <h2>
                        {{ ($model->title ?? '') }}
                    </h2>
                </header>
                <div class="game-card-body">
                    <div class="game-card-details">
                        <div>
                            <span>{{Str::ucfirst(trans('app.release_date'))}}</span>
                            <span>{{ ($model->release_date ?? '') }}</span>
                        </div>
                        <div>
                            <span>{{Str::ucfirst(trans('app.runtime'))}}</span>
                            <span>{{ ($model->runtime ?? '')}} {{trans('app.min')}}</span>
                        </div>
                        <div>
                            <span>{{ Str::ucfirst(trans('app.rating')) }}</span>
                            <span>{{ ($model->rating ?? '') }}</span>
                        </div>
                        <div>
                            <span>{{ Str::ucfirst(trans('app.genres')) }}</span>
                            <span>{{ ($model?->genres->pluck('name')->implode(', ')) }}</span>
                        </div>
                        <div>
                            <span>{{ Str::ucfirst(trans('app.languages')) }}</span>
                            <span>{{ ($model?->languages->pluck('name')->implode(', ')) }}</span>
                        </div>
                        <div>
                            <span>{{ Str::ucfirst(trans('app.countries')) }}</span>
                            <span>{{ ($model?->countries->pluck('name')->implode(', ')) }}</span>
                        </div>
                    </div>
                    <div class="game-card-description">
                        {{ ($model->description ?? '') }}
                    </div>
                </div>
            </article>
        @endforeach

    </div>
</section>
@endsection