<!doctype html>
<html>
    <head>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


        <title>@yield('title', 'Artchive')</title>
    </head>
    <body>

        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/faq">FAQ</a></li>
            <li><a href="/login">Login</a></li>
            <li><a href="/exhibits/create">Create Exhibits</a></li>
            <li><a href="/exhibits/update">Update Exhibits</a></li>
            <li><a href="/exhibits/browse">Browse Exhibits</a></li>

        </ul>

        @yield('content')
    </body>

</html>