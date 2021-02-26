<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

use App\Models\estabelecimento;

class GeneralController extends BaseController
{
    public function Login(Request $request){
        if($request){
           estabelecimento::create($request->all());
        }
    }
    
    public function getAll(Request $request, $eid){
      return estabelecimento::all();
    }

    public function getAllclientes($id){
        return 'Rota que vai retornar os dados de todos os clientes sob detereminado estabelecimento'. $id;
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
