<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

//use Request;
use App\Http\Requests;
use App\Http\Requests\Request as RequestsRequest;
use App\Jornalista;
use Error;

class JornalistaController extends Controller
{
    public function registrar(){
       return view('jornalista.formulario');
    }


    public function adiciona(Request $request){
        try{
            $jornalista = new Jornalista();
            $jornalista->nome = $request->nome;
            $jornalista->sobrenome = $request->sobrenome;
            $jornalista->email = $request->email;
            $jornalista->senha = $request->senha;
            $jornalista->save();

            return ['sucess' => true];
        }
        catch(\Exception $error){
                return ['error' => $error];
        }

    }

    public function login(){
        return view('jornalista.login');
    }
    public function ficha(){
        return view('jornalista.ficha');
    }
}
