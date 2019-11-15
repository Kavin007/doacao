@extends('template.home')
@section('content')
<div class="container d-flex justify-content-center align-items-center row" style="min-height: 70vh">

    <div class="card w-50">
        <div class="card-header d-flex justify-content-center">Empresa Login</div>
        <div class="card-body">
            <form method="post" action="{{url('/login')}}">
            @csrf
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="form-group col-md-10">
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>

                <div class="botao" style="padding:20px">
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