<!DOCTYPE html>
<html lang="{{ app() ->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title')</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://kit.fontawesome.com/f53f1d2c99.js" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/toppage.css') }}" rel="stylesheet">

    </head>

    <body>
        <main>
            @yield('content')
        </main>
    </body>
    <footer>
        <div class="fixed-bottom mx-auto" style="height:30px; width: 650px; background-color:white;">
            <div class="row">
                <div class="col-3 text-center">
                    <span>
                        <a href="../toppage"><i class="fa-solid fa-house-chimney"></i></a>
                    </span>
                </div>
                <div class="col-3 text-center">
                    <span>
                        <a href="../saunaname"><i class="fa-solid fa-circle-plus"></i></a>
                    </span>
                </div>
                <div class="col-3 text-center">
                    <span>
                        <a href="../index"><i class="fa-solid fa-book-open"></i></a>
                    </span>
                </div>
                <div class="col-3 text-center">
                    <span>
                        <a href="../user"><i class="fa-solid fa-pen"></i></a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
</html>
