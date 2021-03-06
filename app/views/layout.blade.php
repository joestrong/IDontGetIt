<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>I don't get it! Joke explanations</title>
    {{ HTML::style('css/style.css'); }}
</head>
<body>
    <div class="top-nav">
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/jokes/create">Add joke</a></li>
            @if(Auth::check())
                <li><a href="/users/logout">Log out {{ Auth::user()->username }}</a></li>
            @else
                <li><a href="/users/login">Log in</a></li>
                <li><a href="/users/register">Register</a></li>
            @endif
        </ul>
    </div>
    <div class="container">
        {{ $errors->first() }}
        @if( Session::has('message') )
            {{ Session::get('message') }}
        @endif
        @yield('content')
    </div>
</body>
</html>