<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'beSide') }}</title>
        <link rel="icon" type="image/png" href="{{ asset('beSide-logo.png') }}">


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href="/bootstrap/bootstrap.css" rel="stylesheet" />
        <script src="/jquery/jquery-3.7.1.min.js"></script>
        <script src="/socket/socket.io.js"></script>
        <script src="/bootstrap/masonry.pkgd.min.js"></script>
        <script src="/bootstrap/bootstrap.bundle.js"></script>
        <link href="/css/app.css" rel="stylesheet" />
        <script src="/js/app.js"></script>    
    </head>
    <body>
        <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
            <div class="align-items-center p-5 shadow-box">
                <div>
                    <a href="/">
                        <div class="center-logo mb-3">
                            <img src="{{ asset('images/beSide-logo.png') }}" alt="Logo" width="250">
                        </div>
                    </a>
                </div>
    
                <div>
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
