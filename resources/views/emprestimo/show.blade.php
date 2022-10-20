@extends('layout.app')

@section('title')
    {{$emprestimo->id}}
@endsection

@section('content')

    <h1>{{$emprestimo->id}}</h1>

    <ul>
        <li><strong>id:</strong> {{$emprestimo->id}} </li>
        <li><strong>livro:</strong> {{$emprestimo->Livro->nome}} </li>
        <li><strong>contato:</strong> {{$emprestimo->contato->nome}} </li>
        <li><strong>momento 0:</strong> {{$emprestimo->datahora}} </li>
        <li><strong>data de entrega:</strong> {{$emprestimo->dataDevolucao}} </li>
    </ul>
    <hr>
    <a class="btn btn-warning" href="{{$emprestimo->id}}/edit">editar</a>
    <a class="btn btn-dark" href="/emprestimos">Voltar</a>
    {{Form::open(['route' => ['emprestimos.destroy',$emprestimo->id],'method' => 'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}

@endsection
