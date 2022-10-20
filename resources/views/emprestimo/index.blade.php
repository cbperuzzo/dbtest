@extends('layout.app')
@section('title','listagem de emprestimos')
@section('content')
    
    <h1>Listagem de livros</h1>

    <a href='emprestimos/create'>novo emprestimo</a>

    <hr>

    <ul>
        
        @foreach($emprestimo as $emp)

            <li>
                <a href="emprestimos/{{$emp->id}}">{{$emp->Livro->nome . '--' . $emp->Contato->nome}}</a>
            </li>

        @endforeach

    </ul>
    {{$emprestimo->links()}}

@endsection