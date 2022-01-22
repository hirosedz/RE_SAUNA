<!DOCTYPE html>
<html lang="{{ app() ->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toppage.css') }}" rel="stylesheet">
    </head>

    <body>
        <header>
            <div class="row text-center align-middle">
                <div class="col-md-12">
                    <div>LOGO APP</div>
                </div>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
    </body>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">4icons here.</span>
        </div>
    </footer>
</html>
