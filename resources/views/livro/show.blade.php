@extends('layout.app')

@section('title')
    {{$livro->nome}}
@endsection

@section('content')

    <h1>{{$livro->nome}}</h1>

    <ul>
        <li><strong>id:</strong> {{$livro->id}} </li>
        <li><strong>autor:</strong> {{$livro->autor}} </li>
        <li><strong>genero:</strong> {{$livro->genero}} </li>
    </ul>
    <hr>
    <a class="btn btn-warning" href="{{$livro->id}}/edit">editar</a>
    <a class="btn btn-dark" href="/livros">Voltar</a>
    {{Form::open(['route' => ['livros.destroy',$livro->id],'method' => 'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}


@endsection
