<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use \App\Models\ModelsPlacas;
use Illuminate\Support\Facades\DB;

class ModelsPlacasController extends Controller
{

    //recuperar o registro pelo id
    public function findByid(Request $request){
        
        return ModelsPlacas::findOrFail($request->id);
        
    }

    //registrar um cliente
    public function register(Request $request){
        
        $r = ModelsPlacas::create($request->all());
        return $r;
    }

    //atualizar os dados do cliente
    public function update(Request $request, $id){
        
        $update = ModelsPlacas::findOrFail($id);
        $update->update($request->all());

        return $update;
        
    }

    //delete um cliente
    public function delete(Request $request){
        
        $id = ModelsPlacas::findOrFail($request->id);
        $id->delete($request->all());
        return $id;
    }

    //recuperar todas as placas com o final passado por parâmetro
    public function finalPlaca(Request $request){
        $final = $request->numero;
        $data = ModelsPlacas::all();
        foreach ($data as $key => $value) {
            $ultino_n =  substr($value['placa_carro'], -1);
            if ($ultino_n == $final) {
                $arr = [
                    'nome' => $value['nome'],
                    'telefone' => $value['telefone'],
                    'cpf' => $value['cpf'],
                    'placa_carro' => $value['placa_carro']
                ];
                echo "<pre>";
                echo json_encode($value);
            }
        }
       
    }
}
