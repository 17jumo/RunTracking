<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="/app.css">

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div class="form mb-1">
        <div class="note">
            <p id="header" style="font-size: 3em">Running Tracker</p>
            <a class="btn btn-light mx-1" href="/runs">Runs</a>
            <a class="btn btn-light mx-1" href="/results/">Result Comparison</a>

            @if (Auth::check())
                <a href="{{ route('logout') }}" class="btn btn-light mx-1" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-light mx-1" >Login</a>
            @endif

        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
    @yield('content')
</div>
</body>
</html>
