<div class="locale-box">

    <ul>
        <li class="nav-item">
            <a class="nav-link" href="/lang/en">[EN]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/lang/lt">[LT]</a>
        </li>
    </ul>

</div>

<div class="nav-wrapper">

    <nav>
        <ul>
            <li class="nav-item">
                <a class="nav-link logo"
                    href="{{ route('front.movies.index') }}">{{ Str::ucfirst(trans('app.movies')) }}</a>
            </li>
            <ul>
    </nav>

    <div class="search-box">
        <form action="{{ route('front.search') }}" method="GET" role="search" class="search">
            <div class="icon">

            </div>
            <div class="input">
                <input type="search" name="search" value="" placeholder="@lang('app.search_for_a_movie')" id="moviesearch" />
            </div>
        </form>
    </div>

</div>
