@extends('layout.app')
@section('title','Contato - {{$contato->nome}}')
@section('content')
    <h1>Contato - {{$contato->nome}}</h1>
    <ul>
        <li>ID: {{$contato->id}}</li>
        <li>Cidade: {{$contato->cidade}}</li>
        <li>Estado: {{$contato->estado}}</li>
    </ul>
    <a class="btn btn-warning" href="{{$contato->id}}/edit">editar</a>
    <br>
    <a class="btn btn-dark" href="{{url('contatos')}}">Voltar</a>
    
    {{Form::open(['route' => ['contatos.destroy',$contato->id],'method' => 'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}

@endsection