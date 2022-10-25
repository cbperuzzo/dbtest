@extends('layouts.app')
@section('content')
    <h1>Contato - {{$contato->nome}}</h1>
    <ul>
        <li>ID: {{$contato->id}}</li>
        <li>Cidade: {{$contato->cidade}}</li>
        <li>Estado: {{$contato->estado}}</li>
    </ul>
    <br>
    <h3>Emprestimos: </h3>
        @foreach($contato->Emprestimo as $emp)
            <hr>
            <h5>- |{{$emp->id}}</h5>
            <ul>
                <li><strong>livro: </strong>{{$emp->livro->nome}}</li>
                <li><strong>devolvolução: </strong>{{$emp->devolvido}}</li>
                <li><strong>início: </strong>{{$emp->dataHora}}</li>
            </ul>
        @endforeach
        <hr>
    @if(Auth::check() && Auth::user()->isAdmin())
    <a class="btn btn-warning" href="{{$contato->id}}/edit">editar</a>
    <br>
    @endif
    <a class="btn btn-dark" href="{{url('contatos')}}">Voltar</a>
    @if(Auth::check() && Auth::user()->isAdmin())
    {{Form::open(['route' => ['contatos.destroy',$contato->id],'method' => 'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}
    @endif
@endsection