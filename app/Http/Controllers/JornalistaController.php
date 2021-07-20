<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

//use Illuminate\Http\Request;
//use App\Http\Requests;

use Request;
use App\Http\Requests\Request as RequestsRequest;
use App\Jornalista;
use Error;

class JornalistaController extends Controller
{
    public function registrar(){
       return view('jornalista.formulario');
    }

    public function adiciona(){
        try{
            Jornalista::create(Request::all());
            
            return redirect()
                ->action('JornalistaController@login')
                ->withInput();
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
