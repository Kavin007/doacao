<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Empresa;
use\App\User;
use\App\Endereco;
use\App\Contato;
use DB;
class EmpresaController extends Controller
{
    public function index()
    {   

   
        return view('empresa.home');
    }

    public function edit(Request $request)

    {   
        $usuario = User::findOrFail($request->id);
        
        $endereco = Endereco::where('users_id',$usuario->id)->first();

        $contato = Contato::where('users_id',$usuario->id)->first();
        $retorno = [
            'usuario' => $usuario,
            'endereco' => $endereco,
            'contato' => $contato
        ];
        return ($retorno);
    }
}
