<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Noticia;
use Illuminate\Support\Facades\DB; 

class NoticiaController extends Controller
{
    public function show(){
        $noticias = Noticia::all();
        return view('noticia.listagem')->with('noticias', $noticias);
    }

    public function apishow(){
        $noticias = Noticia::all();
        return response()->json($noticias);
    }

}
