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
                <a class="nav-link" id="editar" data-toggle="modal" href="#" data-target="#editar-dados">Editar
                    Dados</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="editar" data-toggle="modal" href="#" data-target="#nova-doacao">Nova Doação</a>
            </li>
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
                                    <input type="text" class="form-control" value="{{auth()->user()->email}}" dissabled>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- aqui começa parte de doações -->
            <div class="tab-pane fade" id="doacoes" role="tabpanel" aria-labelledby="doaces-tab">
                <div style="overflow-x:auto;">
                    <div class="card">
                        <div class="card-header">Doações</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Número</th>
                                        <th scope="col">Vencimento</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Descrição</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>1</th>
                                        <td>08/12/2019</td>
                                        <td>10</td>
                                        <td>Higiene Pessoal</td>
                                        <td>Vencido</td>
                                        <td>Pasta de Dente</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal para editar dados-->
<div class="modal fade" id="editar-dados" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                <form method="post" action="{{url('/update')}}">
                    @csrf
                    <input type="text" hidden name="id_usuario" value="{{auth()->user()->id}}">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Nome</label>
                            <input name="nome" id="nome" type="text" class="form-control">
                        </div>

                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input name="email" id="email" type="text" class="form-control">
                        </div>

                        <div class="col mt-5">
                            <label for="">Endereço</label>
                        </div>

                    </div>
                    <!-- comeca o endereco -->

                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label for="">Cep</label>
                            <input name="cep" type="text" id="cep" class="form-control">
                        </div>

                        <div class="col-md-5">
                            <label for="">Rua</label>
                            <input name="rua" type="text" id="rua" class="form-control">
                        </div>

                        <div class="col-md-4">
                            <label for="">Bairro</label>
                            <input name="bairro" id="bairro" type="text" id="bairro" class="form-control">
                        </div>

                        <div class="col-md-5 mt-3">
                            <label for="">Cidade</label>
                            <input name="cidade" id="cidade" type="text" class="form-control">
                        </div>

                        <div class="col-md-3 mt-3">
                            <label for="">Estado</label>
                            <input name="estado" id="estado" type="text" class="form-control">
                        </div>

                        <div class="col-md-4 mt-3">
                            <label for="">Número</label>
                            <input name="numero" id="numero" type="text" class="form-control">
                        </div>

                        <div class="col mt-5">
                            <label for="">Contato</label>
                        </div>
                    </div>

                    <!-- contato começa aqui -->
                    <div class="row mt-3">
                        <div class="col-md-5">
                            <label for="">Telefone</label>
                            <input type="text" id="telefone" class="form-control" name="telefone">
                        </div>

                        <div class="col-md-5">
                            <label for="">Celular</label>
                            <input type="text" id="celular" class="form-control" name="celular">
                        </div>
                    </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submite" class="btn btn-primary">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- modal para criar uma nova doacao -->


<!-- Modal de cadastro nova doacao-->
<div class="modal fade" id="nova-doacao" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nova Doação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{url('/storeDoacao')}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    <input type="text" hidden name="users_id" value="{{auth()->user()->id}}">

                        <label for="">Nome</label>
                        <input type="text" name="nome" class="form-control" placeholder="nome">
                    </div>

                    <div class="col-md-6">
                        <label for="">Tipo</label>
                        <select name="tipo" class="form-control" id="">
                            <option value="higiene pessoal">Higiene Pessoal</option>
                            <option value="produto nao perecivel">Produtos Não Pereciveis</option>
                            <option value="utencilios de cozinha">Utensílios de Cozinha</option>
                            <option value="moveis">Móveis</option>
                            <option value="outros">Outros</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="">Validade</label>
                        <input type="date" name="validade" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <label for="">Quantidade</label>
                        <input type="text" name="quantidade" class="form-control">
                    </div>

                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submite" class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- input que pega id de quem ta logado -->
<input type="text" hidden name="id" value="{{auth()->user()->id}}" class="numero">


<!-- script que preenche o modal do usuario com os dados do banco -->
<script>
var id = $('.numero').val()

$.ajax({
    url: '/edit',
    type: 'get',

    data: {
        '_token': $('input[name=_token]').val(),
        'id': id
    }
}).done(function(dados) {
    //dados do usuario
    $('#nome').val(dados.usuario.nome)
    $('#email').val(dados.usuario.email)
    //endereco
    $('#cep').val(dados.endereco.cep)
    $('#rua').val(dados.endereco.rua)
    $('#bairro').val(dados.endereco.bairro)
    $('#cidade').val(dados.endereco.cidade)
    $('#estado').val(dados.endereco.estado)
    $('#numero').val(dados.endereco.numero)
    //contato
    $('#telefone').val(dados.contato.telefone)
    $('#celular').val(dados.contato.celular)

}).fail(function() {
    console.log('falha')
}).always(function() {})
</script>

@stop