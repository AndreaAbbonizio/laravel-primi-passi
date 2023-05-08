<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
    <header>
        <div class="container">
            <ul>
                @foreach($links as $link)
                <li><a href="{{route($link)}}">{{$link}}</a></li>
                @endforeach
            </ul>
        </div>
    </header>
    <h1>Pagina About</h1>
</body>
</html>