<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Bem Vindo</title>
</head>

<body>

    <ul class="nav justify-content-end">
        <div class="nav d-flex justify-content-start">
            <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">Home</a> 
            </li>
        </div>

        <li class="nav-item">
            <a class="nav-link active" href="{{url('login')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="{{url('formEmpresa')}}">Cadastro</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Sugestão</a>
        </li>
    </ul>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>