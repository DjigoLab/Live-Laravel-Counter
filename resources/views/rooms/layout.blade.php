<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Counter</title>
</head>
<body>
    <header>
        @yield('header-content')
    </header>
    <div id="app">
        @yield('content')
    </div>
    <footer class="footer {{ !empty($footer_class) ? $footer_class : "" }}">
        @yield('footer-content')
    </footer>

    <script type="text/javascript" src="js/app.js"></script>
</body>
</html>