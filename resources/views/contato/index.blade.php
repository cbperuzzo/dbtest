@extends('layout.app')
@section('tituloh1','contatos')
@section('corpo')
    <h3>listagem e contatos</h3>
    <ul>
    @foreach($contatos as $contato)
        <ul>
        <li><a href="{{url('contatos/'.$contato->id)}}">{{$contato->nome}}

        </a></li>
        @endforeach
    <ul>

@endsection