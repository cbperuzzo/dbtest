@extends('layouts.app')

@section('content')

    <h1>{{$livro->nome}}</h1>

    <ul>
        <li><strong>id:</strong> {{$livro->id}} </li>
        <li><strong>autor:</strong> {{$livro->autor}} </li>
        <li><strong>genero:</strong> {{$livro->genero}} </li>
    </ul>
    <br>
    <h3>emprestimos: </h3>
    @foreach($livro->emprestimo as $emp)
        <hr>
        <h5>- |{{$emp->id}}</h5>
            <ul>
                <li><strong>contato:</strong>{{$emp->Contato->nome}}</li>
                <li><strong>devolução:</strong>{{$emp->devolvido}}</li>
                <li><strong>início:</strong>{{$emp->dataHora}}</li>
            </ul>
    @endforeach
    <hr>
    @if(Auth::check() && Auth::user()->isAdmin())
    <a class="btn btn-warning" href="{{$livro->id}}/edit">editar</a>
    @endif
    <a class="btn btn-dark" href="/livros">Voltar</a>
    @if(Auth::check() && Auth::user()->isAdmin())
    {{Form::open(['route' => ['livros.destroy',$livro->id],'method' => 'DELETE'])}}
    {{Form::submit('Excluir',['class'=>'btn btn-danger'])}}
    {{Form::close()}}
    @endif


@endsection
