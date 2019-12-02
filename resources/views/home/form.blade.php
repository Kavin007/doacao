@extends('template.home')
@section('content')
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh">
    <div class="card w-75">
        <div class="card-header d-flex justify-content-center">Cadastro</div>
        <div class="card-body">

            <form method="post" action="{{$data['url']}}">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <input value="{{$data['usuario']}}" name="usuario[nome]" type="text" class="form-control"
                            placeholder="Nome">
                    </div>

                    <div class="col-md-6">
                        <input value="{{$data['usuario']}}" name="usuario[email]" type="text" class="form-control"
                            placeholder="Email">
                    </div>

                    <div class="col-md-3 mt-3">
                        <select name="tipo" class="form-control">
                            <option value="ong"> ONG</option>
                            <option value="empresa">Empresa</option>
                        </select>
                    </div>

                    <div class="col-md-5 mt-3">
                        <input value="{{$data['usuario']}}" name="usuario[password]" type="password" class="form-control"
                            placeholder="Senha">
                    </div>

                    <div class="col-md-4 mt-3">
                        <input type="password" class="form-control" placeholder="Confirmar Senha">
                    </div>

                    <div class="col mt-5 text-center">
                        <label for="">Endereço</label>
                    </div>

                </div>
                <!-- comeca o endereco -->

                <div class="row mt-3">
                    <div class="col-md-3">
                        <input value="{{$data['usuario']}}" name="usuario[cep]" type="text" id="cep" size="10"
                            maxlength="9" onblur="pesquisacep(this.value);" class="form-control" placeholder="CEP">
                    </div>

                    <div class="col-md-5">
                        <input value="{{$data['usuario']}}" name="usuario[rua]" type="text" id="rua" class="form-control" placeholder="Rua">
                    </div>

                    <div class="col-md-4">
                        <input value="{{$data['usuario']}}" name="usuario[bairro]" type="text" id="bairro" class="form-control" placeholder="Bairro">
                    </div>

                    <div class="col-md-5 mt-3">
                        <input value="{{$data['usuario']}}" name="usuario[cidade]" type="text" id="cidade" class="form-control" placeholder="Cidade">
                    </div>

                    <div class="col-md-3 mt-3">
                        <input value="{{$data['usuario']}}" name="usuario[estado]" type="text" id="uf" class="form-control" placeholder="Estado">
                    </div>

                    <div class="col-md-4 mt-3">
                        <input value="{{$data['usuario']}}" name="usuario[numero]" type="text" class="form-control" placeholder="Numero">
                    </div>
                </div>

                <div class="col mt-5 d-flex justify-content-end ml-3">
                    <button type="submite" class="btn btn-primary">Salvar</button>
                </div>


            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value = ("");
    document.getElementById('bairro').value = ("");
    document.getElementById('cidade').value = ("");
    document.getElementById('uf').value = ("");

}

function meu_callback(conteudo) {
    if (!("erro" in conteudo)) {
        //Atualiza os campos com os valores.
        document.getElementById('rua').value = (conteudo.logradouro);
        document.getElementById('bairro').value = (conteudo.bairro);
        document.getElementById('cidade').value = (conteudo.localidade);
        document.getElementById('uf').value = (conteudo.uf);

    } //end if.
    else {
        //CEP não Encontrado.
        limpa_formulário_cep();
        alert("CEP não encontrado.");
    }
}

function pesquisacep(valor) {

    //Nova variável "cep" somente com dígitos.
    var cep = valor.replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep != "") {

        //Expressão regular para validar o CEP.
        var validacep = /^[0-9]{8}$/;

        //Valida o formato do CEP.
        if (validacep.test(cep)) {

            //Preenche os campos com "..." enquanto consulta webservice.
            document.getElementById('rua').value = "...";
            document.getElementById('bairro').value = "...";
            document.getElementById('cidade').value = "...";
            document.getElementById('uf').value = "...";


            //Cria um elemento javascript.
            var script = document.createElement('script');

            //Sincroniza com o callback.
            script.src = 'https://viacep.com.br/ws/' + cep + '/json/?callback=meu_callback';

            //Insere script no documento e carrega o conteúdo.
            document.body.appendChild(script);

        } //end if.
        else {
            //cep é inválido.
            limpa_formulário_cep();
            alert("Formato de CEP inválido.");
        }
    } //end if.
    else {
        //cep sem valor, limpa formulário.
        limpa_formulário_cep();
    }
};
</script>
@stop