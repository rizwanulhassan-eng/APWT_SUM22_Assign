<html>
    <body>
        <nav>
            <a href="{{ route('login.view') }}">Login</a>
            <a href="{{ route('register.view') }}">Register</a>
        </nav>
        @yield('content')
    </body>
</html>