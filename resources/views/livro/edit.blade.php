@extends('layouts.app')

@section('content')

    {{Form::open(['route'=>['livros.update',$livro->id],'method'=>'PUT','enctype'=>'multipart/form-data'])}}
    
        nome:
        {{Form::text('nome',$livro->nome,['class'=> 'form-control' ,'required',])}}

        autor:
        {{Form::text('autor',$livro->autor,['class'=> 'form-control' ,'required',])}}

        genero:
        {{Form::text('genero',$livro->genero,['class'=> 'form-control' ,'required',])}}


        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}

    {{Form::close()}}

@endsection