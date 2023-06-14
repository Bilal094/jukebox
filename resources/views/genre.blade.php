<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song genres</title>
</head>
<body>
    <h1>Genres:</h1>
    @foreach ($genre as $item)
        
    <li><a>{{$item['name']}}</a></li>

    @endforeach
</body>
</html>