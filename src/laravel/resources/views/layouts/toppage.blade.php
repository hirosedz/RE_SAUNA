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
        <main>
            @yield('content')
        </main>
    </body>
    <footer>
        <div class="fixed-bottom mx-auto" style="height:30px; width: 600px; background-color:white;">
            <div class="row">
                <div class="col-6 col-md">
                    <p>
                        <a href="../toppage">home</a>
                    </p>
                </div>
                <div class="col-6 col-md">
                    <p>
                        <a href="../saunaname">create</a>
                    </p>
                </div>
                <div class="col-6 col-md">
                    <p>
                        <a href="../index">index</a>
                    </p>
                </div>
                <div class="col-6 col-md">
                    <p>
                        <a href="../index">edit</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
</html>
