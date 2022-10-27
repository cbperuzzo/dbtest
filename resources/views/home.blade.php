@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <ul>
                        <li><strong>livros: </strong>{{$nlivros}}</li>
                        <li><strong>contatos: </strong>{{$ncontatos}}</li>
                        <li><strong>emprestimos: </strong>{{$nemprestimos}}</li>
                    </ul>
                    <h4>emprestimos a serem devolvidos</h4>
                    <ul>
                    @foreach($empdev as $emprow)
                        <li><strong>{{$emprow->id}} - </strong/>contato:{{$emprow->Contato->nome}} - livro:{{$emprow->livro->nome}}</li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
