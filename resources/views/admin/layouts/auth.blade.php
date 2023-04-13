<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.partials.head')
</head>

<body class="hold-transition login-page">
<header>
    <nav class="navbar navbar-expand">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/lang/en">[EN]</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/lang/lt">[LT]</a>
            </li>
        </ul>
    </nav>
</header>

    @if ($errors->any())
    <div class="alert alert-danger">

        @foreach ($errors->all() as $error)
        <div>
            {{ $error }}
        </div>
        @endforeach

    </div>
    @endif

    @if (session()->has('messages'))
    <div class="alert alert-success">
        @foreach (session()->get('messages') as $message)
        <div>
            {{ $message }}
        </div>
        @endforeach
    </div>
    @endif

    @yield('content')
    @include('admin.partials.javascripts')
    @yield('js')
</body>

</html>