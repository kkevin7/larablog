<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Home de Laravel2 - {{"Hola mundo $nombre $apellido"}} </h1>
    <?php 
    foreach ($posts as $key => $value) : ?>
    <li>{{$value}}</li>
    <?php endforeach ?>

    @foreach ($posts as $post)
    <li>{{$post}}</li>
    @endforeach

    @forelse ($posts as $post)
    <li>{{$post}}</li>
    @empty
    <li>Vacio</li>
    @endforelse
</body>
</html>
