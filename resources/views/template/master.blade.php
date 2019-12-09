<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <title>Document</title>
</head>

<body>
    <br>

    <div class="row">
        @if (Session::has('success'))
        <script>
        window.onload = function() {
            alertMsg('{{Session::get("success")}}', 'success')
        }
        </script>
        @endif

        @if (Session::has('warning'))
        <script>
        window.onload = function() {
            alertMsg('{{Session::get("warning")}}', 'warning')
        }
        </script>
        @endif

        @if (Session::has('error'))
        <script>
        window.onload = function() {
            alertMsg('{{Session::get("error")}}', 'error')
        }
        </script>
        @endif
    </div>
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

    <script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
    <script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    function alertMsg(msg, type) {
        Toast.fire({
            type: type,
            title: msg
        })
    }
    </script>
    @yield('js')

</body>

</html>