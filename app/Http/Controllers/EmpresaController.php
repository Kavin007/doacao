<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Empresa;
use\App\User;
use\App\Endereco;
class EmpresaController extends Controller
{
    public function index()
    {   

   
        return view('empresa.home');
    }

    public function edit($id)
    {   $usuario = User::findOrFail($id);
        return $endereco;
    }
}
