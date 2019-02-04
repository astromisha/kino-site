<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kino-Land</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />

</head>
<body>
<header>
    <div class="menu">
        <div class="container">
            <nav class="four">
                <ul class="main-menu-list">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i>Главная</a></li>
                    <li><a href="#">Work</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul>
                    <li><a href="{{ route('login') }}">Admin</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<main>
    <div class="container">
        @yield('content')
    </div>
</main>
<script src="{{ asset('js/app.js') }}" type="text/js"></script>


</body>
</html>