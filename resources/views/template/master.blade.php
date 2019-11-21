<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <span class="navbar-brand" style="font-weight: bolder">Bem Vindo 'nome da empresa'</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse  navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" id="menu_home">
                    <a href="#" class="nav-link">Meus Dados</a>
                </li>
                <li class="nav-item" id="menu_cliente">
                    <a href="#" class="nav-link">Doações</a>
                </li>
                <li class="nav-item" id="menu_colaborador">
                    <a href="#" class="nav-link">Parceria</a>
                </li>
                <li class="nav-item" id="menu_colaborador">
                    <a href="#" class="nav-link">Sair</a>
                </li>


            </ul>
        </div>
    </nav>

    <div class="container">
        @yield('content')
        
    </div>

    <nav class="navbar fixed-bottom navbar-dark bg-dark pt-1 pb-1">
        <footer class="text-light">&copy; Copyright 2019</footer>
    </nav>

</body>

</html>