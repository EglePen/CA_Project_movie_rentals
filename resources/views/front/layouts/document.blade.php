<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.partials.head')
</head>

<body>
    <header>
        @include('front.partials.header')
    </header>
    
    <main>
        @yield('content')
    </main>

    <footer>
        @include('front.partials.footer')
    </footer>

    @include('front.partials.javascripts')
</body>

</html>