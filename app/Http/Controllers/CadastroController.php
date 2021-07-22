<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
//use App\Http\Requests;
use App\Jornalista;

class CadastroController extends Controller
{
    public function adiciona(){
        try{
            Jornalista::create(Request::all());
            $cadastro = "Sucesso";
            return response()->json($cadastro);
        }
        catch(\Exception $error){
                return ['error' => $error];
        }
    }
}
