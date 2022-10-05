@extends('layout.app')
@section('tituloh1','listagem de contatos')
@section('corpo')
    <h3>listagemd e contatos</h3>

    @foreach($contatos as $contato)
        <ul>
        <li><a href="{{url('contatos/'.$contato->id)}}">{{$contato->nome}}

        </a></li>
        </ul>

@endsection