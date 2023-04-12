<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.home') }}" class="nav-link">@langTitle('app.home')</a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="navbar-logout" href="{{ route('admin.logout') }}" role="button">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                @langTitle('app.logout')
            </a>
        </li>
    </ul>
</nav>