<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Counter - Select your username</title>
    </head>
    <body>
    <h2 class="hello">Hello!</h2>
    <p class="introduction"> Before we can start counting... who are you?</p>
    <form method="POST" action="/" class="login">
        @csrf
        <input type="text" name="username" id="username" placeholder="Cool username here">
        <button type="submit" value=""> Let's go!</button>
    </form>
    @error('username')
    <div class="alert invalid-username">
        <li>{{ $message }}</li>
    </div>
    @enderror


    <footer class="main-footer">
        <div class="footer-menu">
            <ul>
                <li> <a href="#"> About this app </a></li>
            </ul>
        </div>
    </footer>

    </body>
</html>