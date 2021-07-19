<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NoticiaController extends Controller
{
    public function show(){
        $noticias = DB::select('select * from noticias');
        return view('noticia.listagem')->with('noticias', $noticias);
    }
}
