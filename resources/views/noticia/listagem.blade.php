@extends('layout.principal')


@section('titulo')
    Listagem de noticias
@stop


@section('conteudo')
    <h1>Listagem de noticias</h1>

    @if(empty($noticias))
    <div class="alert alert-danger">Você não tem nenhuma noticia cadastrada.</div>
    @else

    <table class='table table-striped table-bordered table-hover'>
    @foreach($noticias as $n)
    
    <td> {{$n->titulo}} </td>
    <td> {{$n->descricao}} </td>
  

    <td><a href="/estoque/public/produtos/mostra/<?php echo $n->id; ?>"><span class="glyphicon glyphicon-search"></span></a></td>
    </tr>
    @endforeach
    </table>

    @endif


@stop
