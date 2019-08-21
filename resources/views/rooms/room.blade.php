<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$room->room_name}} - Counter</title>
    </head>
    <body>
        <div id="app">
            <header>
                <h1>{{$room->room_name}}</h1>
                <user-counter></user-counter>
            </header>
            <main id="counter">
                <p id="quantity">11111</p>
                <div class="buttons">
                    <div class="plus">
                        <p>+</p>
                    </div>
                    <div class="minus">
                        <p>-</p>
                    </div>
                </div>
            </main>
            <footer class="counter-footer">
                <li> <a href="/"> back </a></li>
                <li> <a href="/"> home</a></li>
            </footer>
        </div>
    </body>
</html>