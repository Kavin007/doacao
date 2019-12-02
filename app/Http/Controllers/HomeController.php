<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Endereco;
use App\User;

class HomeController extends Controller
{
    public function home()
    {
        return view('home.home');
    }


    public function index ()
    {
        return view('home.login');
    }

    public function login(Request $request)
    {   
        $dados = $request;
        
        if(Auth::attempt(['tipo'=>$dados['tipo'], 'email'=>$dados['email'], 'password'=>$dados['password']])){
           if($dados['tipo'] == 'ong'){
               return 'ong';
           }else if($dados['tipo'] == 'empresa'){
               return view('empresa.home');
           }else {
               return view('home.login');
           }
            
            return view('home.login');
        }
    }

    public function create ()
    {
        $data = [
            'usuario' => '',
            'url' => '/store',
            'method' => 'post'
        ];

        return view('home.form',compact('data'));
    }

    public function store (Request $request)
    {   
        $usuario = User::create([

            'nome' => $request['usuario']['nome'],
            'email' => $request['usuario']['email'],
            'tipo' => $request['tipo'],
            'password' => bcrypt($request['usuario']['password'])
    ]); 

        $endereco = Endereco::create([
            'cep'    => $request['usuario']['cep'],
            'rua'    => $request['usuario']['rua'],
            'bairro' => $request['usuario']['bairro'],
            'cidade' => $request['usuario']['cidade'],
            'estado' => $request['usuario']['estado'],
            'numero' => $request['usuario']['numero'],
            
            'users_id' => $usuario->id
        ]);
        return $endereco;
    }

}
