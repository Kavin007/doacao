<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }


    public function index ()
    {
        return view('home.loginEmpresa');
    }

    public function login(Request $request)
    {   
        $dados = $request;
        
        if(Auth::attempt(['email' => $dados['email'],'password' => $dados['senha'],'tipo' => $dados['tipo']])){
            if($dados->tipo == 'ong'){
                return 'logado como ong';
            }else {
                return view('empresa.home');
            }

        }else {

            return view('home.loginEmpresa');
        }
    }

    public function formEmpresa()
    {
        return view('empresa.form');
    }

}
