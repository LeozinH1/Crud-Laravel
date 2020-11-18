@extends('templates.template')

@section('title', 'Visualizar')

@section('content')

    <div class="row">
        <div class="col">
            <h3 class="mt-5 mb-5">Visualizar</h3>


            {{ $usuario->nome }} <br>
            {{ $usuario->cidade }} <br>
            {{ $usuario->telefone }} <br>

            <a href="{{ route('usuarios.index') }}" class="btn btn-light">Voltar</a>
        </div>
    </div>

@endsection