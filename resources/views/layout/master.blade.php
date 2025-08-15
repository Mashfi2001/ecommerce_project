<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'TechStore')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('layout.header')

    <main class="min-vh-100">
        @yield('content')
    </main>

    @include('layout.footer')

    <script>
    const loginForm = document.getElementById("LoginForm");
    const regForm = document.getElementById("RegForm");
    const indicator = document.getElementById("Indicator");

    function login() {
        regForm.style.display = "none";
        loginForm.style.display = "block";
        indicator.style.transform = "translateX(100px)";
    }

    function register() {
        regForm.style.display = "block";
        loginForm.style.display = "none";
        indicator.style.transform = "translateX(0px)";
    }
    </script>
</body>
</html>