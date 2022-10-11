@extends('layout.app')
@section('title','listagem de livros')
@section('content')
    
    <h1>Listagem de livros</h1>

    <ul>
        
        @foreach($livros as $livro)

            <li>
                <a href="livros/{{$livro->id}}">{{$livro->nome}}</a>
            </li>

        @endforeach

    </ul>

@endsection