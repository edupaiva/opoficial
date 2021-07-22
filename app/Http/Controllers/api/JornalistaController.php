<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jornalista;

class JornalistaController extends Controller
{
    private $jornalista;
    public function __construct(Jornalista $jornalista){
        $this->jornalista = $jornalista;
    }

     public function index(){ 
        $jornalista = $this->jornalista->all(); 
        return response()->json($jornalista);
    }

    public function me($id){ 
        $jornalista = $this->jornalista->find($id); 
        return response()->json($jornalista);
    }

    public function save(Request $request)    {
        $dados = $request->all();
        $produtos = $this->jornalista->create($dados);
        return response()->json($dados);
    }

    public function login(Request $request)    {
        $dados = $request->all();
        return response()->json($dados);
    }





    
}
