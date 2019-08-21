<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>{{$room->room_name}} - Counter</title>
    </head>
    <body>
        @extends('rooms.layout', ['footer_class' => 'single-footer'])

        @section('header-content')
        <h2>{{$room->room_name}}</h2>
        @endsection

        @section('content')
        <the-counter></the-counter>
        <aside class="users-connected">

        </aside>
        @endsection

        @section('footer-content')
        <li> <a href="/"> back </a></li>
        <li> <a href="/"> home</a></li>
        @endsection

    </body>
</html>