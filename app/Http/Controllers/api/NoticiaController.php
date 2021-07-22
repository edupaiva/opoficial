<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Noticia;

class NoticiaController extends Controller
{

    private $noticia;
    public function __construct(Noticia $noticia){
        $this->noticia = $noticia;
    }

    public function index(){ 
        $noticia = $this->noticia->all(); 
        return response()->json($noticia);
    }

    public function me($id){ 
        $noticia = $this->noticia->find($id); 
        return response()->json($noticia);
    }

    public function save(Request $request) {
        $dados = $request->all();
        $produtos = $this->noticia->create($dados);
        return response()->json($dados);
    }

    public function update(Request $request){
       $dados = $request->all();
       $noticia = $this->noticia->find($dados['id']);
       $noticia->update($dados);

       return response()->json($dados);
    }

    public function delete($id){
        $noticia = $this->produtos->find($id);
        $noticia->delete();
        return response()->json(['data'=>['msg' => 'Noticia foi removida com sucesso!' ]]);
    }
}
