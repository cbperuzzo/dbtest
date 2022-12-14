@extends('layouts.app')
@section('content')
    <h1>novo contato</h1>
    {{Form::open(['route' => 'contatos.store','method' => 'POST','enctype'=>'multipart/form-data'])}}

    {{Form::label('nome','Nome')}}
    {{Form::text('nome','',['class'=>'form-control','required',
    'placeholde'=>'nome completo'])}}

    {{Form::label('estado','Estado')}}
    {{Form::text('estado','',['class'=>'form-control','required',
    'placeholde'=>'estado'])}}

    {{Form::label('cidade','Cidade')}}
    {{Form::text('cidade','',['class'=>'form-control','required',
    'placeholde'=>'cidade'])}}

    {{Form::submit('salvar',['class'=>'btn btn-success'])}}

    {{Form::button('cancelar' ,['onclick' => 'javascript:history.back()',
    'class' => 'btn btn-danger'])}}

    {{Form::close()}}

@endsection