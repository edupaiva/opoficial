@extends('layout.principal')

@section('titulo')
    Cadastro de Jornalistas
@stop

@section('conteudo')
 <h1>Novo Usuário </h1>
 
 <form action="adiciona" method="POST">
     @csrf
     <input type="hidden" name="_token" value="{{csrf_token()}}" />
     <div class="form-group">
        Nome <input type="text" name="nome" class="form-control"></div>
     
     <div class="form-group">
        Sobrenome <input type="text" name="sobrenome" class="form-control"></div>

     <div class="form-group">
        Email <input type="email" name="email" class="form-control"></div>

    <div class="form-group">
        senha <input type="password" name="senha" class="form-control"></div>

        

     <input type="submit" value="Cadastrar"  class="btn btn-primary btn-block">
    
 </form>

@stop