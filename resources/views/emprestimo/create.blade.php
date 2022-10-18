@extends('layout.app')
@section('title','novo contato')
@section('content')
    <h1>novo contato</h1>
    {{Form::open(['route' => 'emprestimos.store','method' => 'POST','enctype'=>'multipart/form-data'])}}

    livro id:
    {{Form::text('idLivro','',['class'=>'form-control','required','placeholde'=>'livro id'])}}

    contato id:
    {{Form::text('idContato','',['class'=>'form-control','required',
    'placeholde'=>'contato id'])}}

    data hora:
    {{Form::text('datahora',\Carbon\Carbon::now()->format('d/m/Y H:i:s'),
    ['class'=>'form-control','required','placeholder'=>'Data','rows'=>'8'])}}

    data de devolução:
    {{Form::date('dataDevolucao','',['class'=>'form-control','required',
    'placeholde'=>'data'])}}

    observação:
    {{Form::text('obs','',['class'=>'form-control','required',
    'placeholde'=>'obs'])}}

    {{Form::submit('salvar',['class'=>'btn btn-success'])}}

    {{Form::button('cancelar' ,['onclick' => 'javascript:history.back()',
    'class' => 'btn btn-danger'])}}

    {{Form::close()}}

@endsection