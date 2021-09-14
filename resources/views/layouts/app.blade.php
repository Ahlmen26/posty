<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Posty</title>
</head>
<body>
    {{-- Navigation Bar --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-1">
        <a href="#" class="navbar-brand">Posty</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        {{-- Navbar Nav --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item @if(Route::currentRouteName() == 'home') active @endif">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'dashboard') active @endif">
                    <a href="/dashboard" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'posts') active @endif">
                    <a href="/posts" class="nav-link">Post</a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Niel Ahlmen</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    {{-- Content --}}
    <div>
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>