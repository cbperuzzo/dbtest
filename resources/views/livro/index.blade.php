@extends('layouts.app')

@section('content')
    
    <h1>Listagem de livros</h1>
    {{Form::open(['url'=>'livros/buscar/ns','method'=>'GET'])}}
        <div class="row">
            @if(Auth::check() && Auth::user()->isAdmin())
            <div class="col-sm-3">
                <a class="btn btn-success" href="{{url('livros/create')}}">Criar</a>
            </div>
            @endif
            <div class="col-sm-9">
                <div class="input-group ml-5">
                    @if($busca !== null)
                        &nbsp;<a class="btn btn-info" href="{{url('livros/')}}">Todos</a>&nbsp;
                    @endif
                    {{Form::text('busca',$busca,['class'=>'form-control','required','placeholder'=>'buscar'])}}
                    &nbsp;
                    <span class="input-group-btn">
                        {{Form::submit('Buscar',['class'=>'btn btn-secondary'])}}
                    </span>
                </div>
            </div>
        </div>
    {{Form::close()}}

    <hr>

    <ul>
        
        @foreach($livros as $livro)

            <li>
                <a href="livros/{{$livro->id}}">{{$livro->nome}}</a>
            </li>

        @endforeach

    </ul>
    

@endsection