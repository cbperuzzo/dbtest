@extends('layout.app')
@section('title','listagem de livros')
@section('content')
    
    <h1>Listagem de livros</h1>

    <a href='livros/create'>novo livro</a>

    <hr>

    <ul>
        
        @foreach($livros as $livro)

            <li>
                <a href="livros/{{$livro->id}}">{{$livro->nome}}</a>
            </li>

        @endforeach

    </ul>

@endsection