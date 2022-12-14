@extends('layouts.app')
@section('content')
    
    <h1>Listagem de Emprestimos</h1>
    {{Form::open(['url'=>'emprestimos/buscar/ns','method'=>'GET'])}}
        <div class="row">
            @if(Auth::check() && Auth::user()->isAdmin())
            <div class="col-sm-3">
                <a class="btn btn-success" href="{{url('emprestimos/create')}}">Criar</a>
            </div>
            @endif
            <div class="col-sm-9">
                <div class="input-group ml-5">
                    @if($busca !== null)
                        &nbsp;<a class="btn btn-info" href="{{url('/emprestimos/')}}">Todos</a>&nbsp;
                    @endif
                    {{Form::text('busca',$busca,['class'=>'form-control','required','placeholder'=>'buscar'])}}
                    &nbsp;
                    <span class="input-group-btn">
                        {{Form::submit('Buscar',['class'=>'btn btn-secondary'])}}
                    </span>
                </div>
            </div>
        </div>

    <hr>

    <ul>
        
        @foreach($emprestimo as $emp)

            <li>
                <a href="/emprestimos/{{$emp->id}}">{{$emp->id}}</a> - {{'"'.$emp->Livro->nome .'"' . ' alugado por: ' . $emp->Contato->nome}}
            </li>

        @endforeach

    </ul>
    

@endsection