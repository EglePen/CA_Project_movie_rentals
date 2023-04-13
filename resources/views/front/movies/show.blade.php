@extends('front.layouts.document')

@section('content')
<section>
    <header>
        <h1>
            {{$model->title}}
        </h1>
    </header>

    <div class="single-game-card-wrapper">
        <article class="game-card">
            <img src="{{asset('storage/images/' . ($model->image ?? ''))}}">
            <div class="game-card-body">
                <div class="game-card-details">
                    <div>
                        <span>@langTitle('app.release_date')</span>
                        <span>{{ ($model->release_date ?? '') }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.runtime')</span>
                        <span>{{ ($model->runtime ?? '')}} @lang('app.min')</span>
                    </div>
                    <div>
                        <span>@langTitle('app.rating')</span>
                        <span>{{ ($model->rating ?? '') }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.genres')</span>
                        <span>{{ ($model?->genres->pluck('name')->implode(', ')) }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.languages')</span>
                        <span>{{ ($model?->languages->pluck('name')->implode(', ')) }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.countries')</span>
                        <span>{{ ($model?->countries->pluck('name')->implode(', ')) }}</span>
                    </div>
                </div>
                <div class="game-card-description">
                    {{ ($model->description ?? '') }}
                </div>
            </div>
        </article>
        <aside>
            <div>
                @foreach($model->images as $image)
                    <img src="{{asset('storage/images/' . ($image->name ?? ''))}}">
                @endforeach
            </div>
        </aside>
    </div>
</section>
@endsection