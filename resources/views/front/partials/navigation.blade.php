
<nav>
    <ul>
        <li class="nav-item">
            <a class="nav-link" href="/lang/en">[EN]</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/lang/lt">[LT]</a>
        </li>
        <li class='dropdown'>
            <i class="fa fa-caret-down" aria-hidden="true"></i>
            <a href="{{route('front.movies.index')}}">{{Str::ucfirst(trans('app.movies'))}}</a>
            <ul class='dropdown-list'>
                <li>
                    <a href="{{route('front.movies.index')}}">{{Str::ucfirst(trans('app.all'))}}</a>
                </li>
            </ul>
        </li>
    </ul>
</nav>