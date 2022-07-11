<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>FILM DI SCARPA:</h1>
    <ul>
        @foreach ($movies as $movie)
        <li>Titolo:{{$movie['title']}}</li> 
        <li>Titolo originale:{{$movie['original_title']}}</li> 
        <li>Lingua:{{$movie['nationality']}}</li>
        <hr> 
        @endforeach
    </ul>
    
</body>
</html>