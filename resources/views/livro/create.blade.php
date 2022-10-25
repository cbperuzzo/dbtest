@extends('layouts.app')
@section('content')
    <h1>novo contato</h1>
    {{Form::open(['route' => 'livros.store','method' => 'POST','enctype'=>'multipart/form-data'])}}

    nome:
    {{Form::text('nome','',['class'=>'form-control','required','placeholde'=>'nome'])}}

    autor:
    {{Form::text('autor','',['class'=>'form-control','required',
    'placeholde'=>'autor'])}}

    genero:
    {{Form::text('genero','',['class'=>'form-control','required',
    'placeholde'=>'genero'])}}

    {{Form::submit('salvar',['class'=>'btn btn-success'])}}

    {{Form::button('cancelar' ,['onclick' => 'javascript:history.back()',
    'class' => 'btn btn-danger'])}}

    {{Form::close()}}

@endsection