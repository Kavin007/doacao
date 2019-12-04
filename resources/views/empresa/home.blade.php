@extends('template.master')
@section('content')

<div class="card text-center position-static mt-5">
    <div class="card-header">Bem Vindo Kevin</div>
    <div class="card-body">

        <ul class="nav nav-tabs" id="myTab" role="tablist">

            <li class="nav-item active">
                <a class="nav-link" id="perfil-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="perfil"
                    aria-selected="true">Perfil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="doacoes-tab" data-toggle="tab" href="#doacoes" role="tab"
                    aria-controls="doacoes" aria-selected="false">Doações</a>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="eventos" role="tabpanel" aria-labelledby="perfil-tab">
                <div style="overflow-x:auto;">
                    <h1>PERFIL</h1>
                </div>
            </div>

            <div class="tab-pane fade" id="doacoes" role="tabpanel" aria-labelledby="doaces-tab">
                <div style="overflow-x:auto;">
                    <h1>DOAÇÕES</h1>
                </div>
            </div>

        </div>
    </div>
</div>


@stop