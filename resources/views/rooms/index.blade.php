<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Room de Rsooms</title>
</head>
<body>

    @foreach ($rooms as $room)
        <div class="room">
            <a href="rooms/{{$room->id}}"><p class="room-name"> {{ $room->room_name }} </p></a>
        </div>
    @endforeach

</body>
</html>