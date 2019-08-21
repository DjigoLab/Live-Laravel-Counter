<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Room de Rooms</title>
    </head>
    <body>
        @extends('rooms.layout', ['footer_class' => 'rooms-footer'])

        @section('header-content')
            <h2>Choose your room</h2>
            <input type="text" name="room" id="room-searcher" placeholder="Search room here">
        @endsection

        @section('content')
        @foreach ($rooms as $room)
        <div class="room">
            <a href="rooms/{{$room->id}}"><p class="room-name"> {{ $room->room_name }} </p></a>
            <user-counter></user-counter>
            {{$room->user_quantity}}
        </div>
        @endforeach
        @endsection

        @section('footer-content')
        <li> <a href="/"> Home </a></li>
        @endsection

    </body>
</html>