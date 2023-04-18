@extends('front.layouts.document')

@section('content')


<section>

    <div class="movie-title">
        <h1>
            {{$model->title}}
        </h1>
    </div>
        <article class="single-movie-card-wrapper">
            <div class ="single-movie-img" >
                <img src="{{asset('storage/images/' . ($model->image ?? ''))}}">
            </div>
            <div class="single-movie-card-body">
                <div class="">
                    <div>
                        <span>@langTitle('app.release_date'):</span>
                        <span>{{ ($model->release_date ?? '') }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.runtime'):</span>
                        <span>{{ ($model->runtime ?? '')}} @lang('app.min')</span>
                    </div>
                    <div>
                        <span>@langTitle('app.rating'):</span>
                        <span>{{ ($model->rating ?? '') }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.genres'):</span>
                        <span>{{ ($model?->genres->pluck('name')->implode(', ')) }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.actors'):</span>
                        <span>{{ ($model?->actors->pluck('fullName')->implode(', ')) }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.languages'):</span>
                        <span>{{ ($model?->languages->pluck('name')->implode(', ')) }}</span>
                    </div>
                    <div>
                        <span>@langTitle('app.countries'):</span>
                        <span>{{ ($model?->countries->pluck('name')->implode(', ')) }}</span>
                    </div>
                </div>
                <div class="description">
                    {{ ($model->description ?? '') }}
                </div>
            </div>
        </article>

        <aside>
            <div class="single-movie-card-images">
                @foreach($model->images as $image)
                    <img src="{{asset('storage/images/' . ($image->name ?? ''))}}">
                @endforeach
            </div>
        </aside>

</section>
@endsection