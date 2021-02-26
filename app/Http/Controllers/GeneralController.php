<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Laravel\Lumen\Routing\Controller as BaseController;

class GeneralController extends BaseController
{
    public function Login(Request $request){
        if($request){

            return 'Rota de Login';   
        }
    }
    
    public function getAll($eid){
       return 'Rota que vai retornar os dados de um estabelecimento'. $eid;
    }

    public function getAllclientes($id){
        return 'Rota que vai retornar os dados de todos os clientes sob detereminado estabelecimento'. $id;
    }

    public function postCliente(Request $request){
        if($request){
            return 'Criando o usuário baseado nas credencias de:'.$request;
        }
    }

    public function getfromClientes($id){
        return 'Retorna os dados de determinado cliente sob determinado ud:'.$id;
    }

    public function updateCliente($id){
        return 'Vai atualizar o cliente!';
    }
}
