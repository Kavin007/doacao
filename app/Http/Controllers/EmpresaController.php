<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Empresa;
use\App\User;
use\App\Endereco;
use DB;
class EmpresaController extends Controller
{
    public function index()
    {   

   
        return view('empresa.home');
    }

    public function edit($id)
    {   $usuario = User::findOrFail($id);
        
        $endereco = Endereco::where('users_id',$usuario->id)->first();

        
        return view('empresa.home',compact('usuario','endereco'));
    }
}
