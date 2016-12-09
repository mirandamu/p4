<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ URL::asset('/css/main.css') }}"/>
        <title>
            @yield('title', "Traveler's Best Friend")
        </title>

        <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
        </script>
        @yield('head')
    </head>
    <body>

        @if(Session::get('flash_message') != null)
            <div class='flash_message'>{{ Session::get('flash_message') }}</div>
        @endif

        <nav>
            <a href="/" id="logo">Traveler's Best Friend</a>
            <ul>
                @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                <li><a href="{{ url('/trips') }}">Dashboard</a></li>
                <li><a href="{{ url('/trips/create') }}">Add New Trip</a></li>
                <li><a href="{{ url('/logout') }}">Logout</a></li>
                @endif
            </ul>
        </nav>

        <main>
        @yield('content')
        </main>

        <script src="{{ URL::asset('/js/main.js') }}"></script>
    </body>
</html>