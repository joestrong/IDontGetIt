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
            <li><a href="/login">Log in</a></li>
            <li><a href="/register">Register</a></li>
        </ul>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>