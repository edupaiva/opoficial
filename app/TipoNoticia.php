<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoNoticia extends Model
{
    protected $table = 'tiponoticias' ; 
    public $timestamps = false ;
    protected $fillable = array ( 'jornalista' , 'classificacao');

    protected $guarded = ['id'];
}
