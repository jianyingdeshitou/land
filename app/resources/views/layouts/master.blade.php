<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Land</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css">
</head>

<body>
    <div class="container">
    <nav class="navbar navbar-default">
        @yield('navbar')
    </nav>
    </div>

    <div class="container">
        <div class="page-header">
            @yield('header')
        </div>

        @if (Session::has('success'))
                    <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>
</html>

