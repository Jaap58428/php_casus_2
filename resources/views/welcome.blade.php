<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Studie Dashboard') }}</title>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="welcome-body">
        <div class="welcome-left">
          <h1>Studie Dashboard!</h1>
          <h2>Het middelpunt van jouw voortgang</h2>
          <div class="welcome-login">
            @if (Route::has('login'))
              @auth
                <a href="{{ url('/home') }}">Home</a>
              @else
                @include('auth.login')
              @endauth
            @endif
          </div>
        </div>
    </body>
</html>
