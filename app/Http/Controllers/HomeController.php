<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    public function index ()
    {
        return view('home.home');
    }

    public function formEmpresa () 
    {
        return view('home.loginEmpresa');
    }

    public function login (Request $request)
    {
        $dados = $request->all();
        
        if(Auth::attempt(['email'=>$dados['email'],'password'=>$dados['senha']])){
            return 'logou';
        }
        return 'deu merda';
    
    }
}
