@extends('layout.app')
@section('title','Alteração Contato {{$contato->nome}}')
@section('content')
    <h1>Alteração Contato {{$contato->nome}}</h1>
    <br />
    {{Form::open(['route' => ['contatos.update',$contato->id], 'method' => 'PUT'])}}
        {{Form::label('nome', 'Nome')}}
        {{Form::text('nome',$contato->nome,['class'=>'form-control','required','placeholder'=>'Nome completo'])}}
        {{Form::label('cidade', 'Cidade')}}
        {{Form::text('cidade',$contato->cidade,['class'=>'form-control','required','placeholder'=>'Nome da cidade'])}}
        {{Form::label('estado', 'Estado')}}
        {{Form::text('estado',$contato->estado,['class'=>'form-control','required','placeholder'=>'Nome do estado'])}}
        <br>
        {{Form::submit('Salvar',['class'=>'btn btn-success'])}}
        {!!Form::button('Cancelar',['onclick'=>'javascript:history.go(-1)', 'class'=>'btn btn-secondary'])!!}
    {{Form::close()}}
@endsection