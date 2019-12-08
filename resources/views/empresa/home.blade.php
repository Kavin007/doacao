@extends('template.master')
@section('content')

<div class="card text-center position-static mt-5">
    <div class="card-header">Bem Vindo &nbsp{{auth()->user()->nome}}</div>
    <div class="card-body">

        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active">
                <a class="nav-link" id="perfil-tab" data-toggle="tab" href="#perfil" aria-selected="true">Perfil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="doacoes-tab" data-toggle="tab" href="#doacoes" aria-selected="false">Doações</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="editar" data-toggle="modal" data-target="#exampleModal">Editar Dados</a>
        </ul>
        <!-- aqui começa a parte de perfil do usuario -->
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="perfil" role="tabpanel" aria-labelledby="perfil-tab">

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row">

                                <div class="col-md-5 mt-3">
                                    <input type="text" class="form-control" value="{{auth()->user()->nome}}" disabled>
                                </div>

                                <div class="col-md-5 mt-3">
                                    <input type="text" class="form-control" value="{{auth()->user()->email}}">
                                </div>

                                <h1><a href="{{url('/edit/'.auth()->user()->id)}}">link</a></h1>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- aqui começa parte de doações -->
            <div class="tab-pane fade" id="doacoes" role="tabpanel" aria-labelledby="doaces-tab">
                <div style="overflow-x:auto;">
                    <h1>DOAÇÕES</h1>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Dados</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="put" action="">
                    @csrf
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="nome"
                            value="{{isset($usuario) ? $usuario->nome : ''}}">
                    </div>

                    <div class="form-group">
                        <label for="">E-mail</label>
                        <input type="text" class="form-control" name="nome"
                            value="{{isset($usuario) ? $usuario->email : ''}}">
                    </div>

                    <div class="form-group">
                        <label for="">Rua</label>
                        <input type="text" class="form-control" name="rua"
                            value="{{isset($endereco) ? $endereco->rua : ''}}">
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
$.ajax({
    url: '/edit',
    type: 'POST',

    data:{
        '_token': $('input[name=_token]').val(),
        id: {{auth()->user()->id}}
    }).done(function(dados){
        alert('funcionou',dados)
    }).fail(function(){
        alert('falha')
    }).always(function(){
})
})

</script>

@stop