<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ asset('adminlte/index3.html') }}" class="brand-link">
        <img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">@langTitle('app.movie_rentals')</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block">{{ Str::title(Auth::user()->fullName) }}</a>
            </div>
        </div>


        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header"> @langTitle('app.data_tables')</li>
                <li class="nav-item">
                    <a href="{{ route('admin.movies.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            @langTitle('app.movies')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.actors.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            @langTitle('app.actors')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.countries.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            @langTitle('app.countries')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.languages.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            @langTitle('app.languages')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.genres.index') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            @langTitle('app.genres')
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.logout') }}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            @langTitle('app.logout')
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>