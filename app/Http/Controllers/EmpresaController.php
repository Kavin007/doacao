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

    public function update(Request $request){   
        
        DB::beginTransaction();
        try {
            $usuario = User::findOrFail($request->id_usuario);
            
            $endereco = Endereco::where('users_id',$usuario->id)->first();

            $contato = Contato::where('users_id',$usuario->id)->first();

            $usuario->update([
                'nome' => $request['nome'],
                'email' => $request['email']
            ]);

            $endereco->update([
                'estado' => $request['estado'],
                'cidade' => $request['estado'],
                'bairro' => $request['bairro'],
                'cep'    => $request['cep'],
                'rua'    => $request['rua'],
                'numero' => $request['numero']
            ]);

            $contato->update([
                'telefone' => $request['telefone'],
                'celular'  => $request['celular']
            ]);

             DB::commit();
             return redirect('/empresaHome')->with('success', 'Atualizado com Sucesso');
        } catch(\Exception $e) {
             DB::rollback();
            return redirect('/empresaHome')->with('error', 'Erro ao Atualizar');
        }

        }

    }