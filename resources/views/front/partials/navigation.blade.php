
<nav>
    <ul>
        <li class="nav-item">
            <a class="nav-link" href="/lang/en">[EN]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/lang/lt">[LT]</a>
        </li>
        <li class="nav-item">
            <a href="{{route('front.movies.index')}}">{{Str::ucfirst(trans('app.movies'))}}</a>
        </li>
    </ul>
    <div>
        <form action="{{route('front.search')}}" method="GET" role="search" class="flex-end">
            <div class="input-group front-input">
                <input type="search" name="search" value="" placeholder="@lang('app.search_for_a_movie')" class="form-control form-control-lg"/>
                <button class="btn bg-lg btn" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
    </div>
</nav>