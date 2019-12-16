<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Endereco;
use App\User;
use App\Contato;
use App\Empresa;
use DB;

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

        if(Auth::attempt([ 'tipo'=>$dados['tipo'], 'email'=>$dados['email'], 'password'=>$dados['password'] ] )){
            return redirect('empresaHome');
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
        
        DB::beginTransaction();
        try {

        $usuario = User::create([
            'email' => $request['usuario']['email'],
            'tipo'  => $request['tipo'],
            'password' => bcrypt($request['usuario']['password'])


    ]); 
        
    
        $empresa = Empresa::create([
            'nome'     => $request['usuario']['nome'],
            'users_id' => $usuario->id
        ]);

        $endereco = Endereco::create([
            'cep'    => $request['usuario']['cep'],
            'rua'    => $request['usuario']['rua'],
            'bairro' => $request['usuario']['bairro'],
            'cidade' => $request['usuario']['cidade'],
            'estado' => $request['usuario']['estado'],
            'numero' => $request['usuario']['numero'],
            
            'empresa_id' => $empresa->id
        ]);

        $contato = Contato::create([
            'telefone' => $request ['usuario']['telefone'],
            'celular'  => $request ['usuario']['celular'],

            'empresa_id' => $usuario->id
        ]);

   

        DB::commit();
        return redirect('/login')->with('success', 'Cadastrado com sucesso');
    }catch (\Exception $e) {
        DB::rollback();
        return redirect('/create')->with('error', 'Erro ao Cadastrar');
    }
     }

}
