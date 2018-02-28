<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Studie Dashboard') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
</head>
<body>
    <div id="app" class="wrapper">
        <nav class="navbar">
          <div class="navbar-buttons">
            <span onclick="location.href='/cijfer'">Studie Dashboard</span>
            <span onclick="location.href='/cijfer/create'">Cijfer invoeren</span>
          </div>
          <div class="navbar-buttons">
            <span>{{ Auth::user()->name }}</span>
            <span onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Uitloggen</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
