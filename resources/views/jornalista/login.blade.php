@extends('layout.principal')

@section('titulo')
    Login
@stop

@section('conteudo')

@if(old('nome')) 
<div class="alert alert-success"> 
    <strong>Sucesso!</strong> O usuario {{ old('nome') }} foi adicionado. 
    
</div> 
@endif

<h1>Fazer Login</h1>

 <form action="news/me" method="POST">

    <div class="form-group"> Login ou Email <input type="text" name="login" class="form-control"></div>
    <div class="form-group"> Senha <input type="password" name="senha" class="form-control"></div>
     
     <input type="submit" value="Entrar">
    
 </form>

 <a href="#">Esqueceu a senha?</a> | 

 <a href="register">Criar nova conta</a>



@stop