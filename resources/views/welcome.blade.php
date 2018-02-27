<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Studie Dashboard</title>
    </head>
    <body>
        <div class="welcome-left">
          <h1>Studie Dashboard!</h1>
          <h2>Het middelpunt van jouw voortgang</h2>
        </div>
        <div class="welcome-right">
          @if (Route::has('login'))
              <div>
                  @auth
                      <a href="{{ url('/home') }}">Home</a>
                  @else
                      <a href="{{ route('login') }}">Login</a>
                  @endauth
              </div>
          @endif
        </div>
    </body>
</html>
