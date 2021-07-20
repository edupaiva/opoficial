<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jornalista extends Model
{
    protected $table = 'jornalistas' ; 
    public $timestamps = false ;
    protected $fillable = array ( 'nome' , 'sobrenome' , 'email' , 'senha' );

    protected $guarded = ['id'];
    
}
