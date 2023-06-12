<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Play Game</title>
    <link href="{{ asset('assets/css/play.css') }}" rel="stylesheet">

</head>

<body>
    <iframe src="{{ $game->html5_url }}"></iframe>
</body>

</html>
