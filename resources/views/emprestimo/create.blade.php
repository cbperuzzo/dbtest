@extends('layout.app')
@section('title','novo contato')
@section('content')
    <h1>novo contato</h1>
    {{Form::open(['route' => 'emprestimos.store','method' => 'POST'])}}

    livro id:
    {{Form::text('idLivro','',['class'=>'form-control','required',
    'placeholde'=>'livro id','list'=>'listalivros'])}}

    <datalist id="listalivros">
        @foreach($livros as $livro)
        <option value="{{$livro->id}}">{{$livro->nome}}</option>
        @endforeach
    </datalist>

    contato id:
    {{Form::text('idContato','',['class'=>'form-control','required',
    'placeholde'=>'contato id','list'=>'listacontatos'])}}

    <datalist id="listacontatos">
        @foreach($contatos as $contato)
        <option value="{{$contato->id}}">{{$contato->nome}}</option>
        @endforeach
    </datalist>

    data hora:
    {{Form::text('datahora',\Carbon\Carbon::now()->format('d/m/Y H:i:s'),
    ['class'=>'form-control','required','placeholder'=>'Data','rows'=>'8'])}}

    data de devolução:
    {{Form::date('dataDevolucao','',['class'=>'form-control','required',
    'placeholde'=>'data'])}}

    observação:
    {{Form::text('obs','',['class'=>'form-control','required',
    'placeholde'=>'obs','list'=>'listcontatos'])}}

    {{Form::submit('salvar',['class'=>'btn btn-success'])}}

    {{Form::button('cancelar' ,['onclick' => 'javascript:history.back()',
    'class' => 'btn btn-danger'])}}

    {{Form::close()}}

@endsection