@extends('layout.app')

@section('title')
    {{'editar '.$livro->nome}}
@endsection

@section('content')

    {{Form::open(['route'=>['livros.update',$livro->id],'method'=>'PUT' ])}}
        nome:
        {{Form::text('nome',$livro->nome,['class'=> 'form-control' ,'required',])}}
        autor:
        {{Form::text('autor',$livro->autor,['class'=> 'form-control' ,'required',])}}
        genero:
        {{Form::text('genero',$livro->genero,['class'=> 'form-control' ,'required',])}}
    {{Form::close()}}

@endsection