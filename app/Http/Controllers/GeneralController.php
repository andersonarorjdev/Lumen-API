<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

use App\Models\estabelecimento;

class GeneralController extends BaseController
{
    public function Login(Request $request){
        if($request->name && $request->email){
           return 'Token';
        }
       else{
           return '404';
       }
    }

    public function CreateEstabilishment(Request $request){
       estabelecimento::create([
           'name' => $request->name
       ]);
    }
    
    public function getAll(){
      return estabelecimento::all();
    }

    public function getAllclientes($esid){
        return estabelecimento::find($esid)->clientes;
    }

    public function postCliente(Request $request){
        if($request){
            return 'Criando o usuário baseado nas credencias de:'.$request;
        }
    }

    public function getfromClientes($cid){
        return 'Retorna os dados de determinado cliente sob determinado ud:'.$cid;
    }

    public function updateCliente($id){
        return 'Vai atualizar o cliente!';
    }
}
