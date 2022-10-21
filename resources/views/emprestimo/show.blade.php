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
        <li><strong>data de início:</strong> {{\Carbon\Carbon::create($emprestimo->dataHora)->format('d/m/Y H:i:s')}} </li>
        <li><strong>entrega:</strong> {!!$emprestimo->devolvido!!}</td></li>
    </ul>
    <hr>
    @if($emprestimo->dataDevolucao==null)
        {{Form::open(['route'=>['emprestimos.devolver',$emprestimo->id],'method'=>'PUT'])}}
        {{form::submit('Devolver',['class'=>'btn btn-success','onclick'=>'return confim("Confirma devolução?")'])}}
        {{Form::close()}}
    @endif
    <a class="btn btn-warning" href="{{$emprestimo->id}}/edit">editar</a>
    <a class="btn btn-dark" href="/emprestimos">Voltar</a>
    {{Form::open(['route' => ['emprestimos.destroy',$emprestimo->id],'method' => 'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}

@endsection
