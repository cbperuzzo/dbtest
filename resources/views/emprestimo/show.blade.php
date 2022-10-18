@extends('layout.app')

@section('title')
    {{$emprestimo->id}}
@endsection

@section('content')

    <h1>{{$emprestimo->id}}</h1>

    <ul>
        <li><strong>id:</strong> {{$emprstimo->id}} </li>
        <li><strong>autor:</strong> {{$emprestimo->idLivro}} </li>
        <li><strong>genero:</strong> {{$emprestimo->idContato}} </li>
        <li><strong>genero:</strong> {{$emprestimo->datahora}} </li>
        <li><strong>genero:</strong> {{$emprestimo->dataDevolucao}} </li>
    </ul>
    <hr>
    <a class="btn btn-warning" href="{{$emprestimo->id}}/edit">editar</a>
    <a class="btn btn-dark" href="/emprestimos">Voltar</a>
    {{Form::open(['route' => ['emprestimo.destroy',$emprestimo->id],'method' => 'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}

@endsection
