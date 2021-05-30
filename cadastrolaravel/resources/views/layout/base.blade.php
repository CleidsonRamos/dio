<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} :: @yield('titulo')</title> <!-- esta pegando o titulo que esta no arquivo .env no parametro APP_NAME=Laravel :: a outra parte do titulo esta pegando do layout-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

</head>
<body>

    <div class="logo">
        <img src="{{ asset('img/logo.png') }}" alt="Digital">
    </div>
    

    <div class="container">
        @yield('conteudo')
    </div>
    
    <footer>
        <p>Cleidson - 2021</p>
    </footer>
</body>
</html>