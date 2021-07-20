<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $table = 'noticias' ; 
    public $timestamps = false ;
    protected $fillable = array ( 'jornalista' , 'classificacao');

    protected $guarded = ['id'];
}
