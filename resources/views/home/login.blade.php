@extends('template.home')
@section('content')
<div class="container d-flex justify-content-center align-items-center row" style="min-height: 70vh">

    <div class="card w-50">
        <div class="card-header d-flex justify-content-center">Login</div>
        <div class="card-body">
            <form method="post" action="{{url('/login')}}">
            @csrf
                <div class="form-group col-md-12">
                    <select class="form-control" name="tipo" id="">
                        <option value="empresa">Empresa</option>
                        <option value="ong">Ong</option>
                    </select>
                </div>
                <div class="form-group col-md-12">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="form-group col-md-12">
                    <input type="password" class="form-control" name="password" placeholder="Senha">
                </div>

                <div class="botao d-flex justify-content-start" style="padding:20px">
                    <button class="btn btn-primary">Entrar</button>
                </div>

            </form>

        </div>
    </div>
</div>


</div>
</div>
</div>

@stop