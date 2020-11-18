@extends('templates.template')

@section('title', 'Home')

@section('content')

    <h3 class="mt-5 mb-5">Usuarios</h3>

    <div class="row">
        <div class="col">
            <a href="{{ route('create') }}" class="btn btn-success mb-5">Cadastrar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios AS $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->nome}}</td>
                        <td>{{$item->cidade}}</td>
                        <td>{{$item->telefone}}</td>
                        <td>
                            <a href="{{ url($item->id) }}" class="btn btn-light">Visualizar</a>
                            <a href="{{ url("$item->id/edit") }}" class="btn btn-primary">Editar</a>

                            <form action="{{ route('destroy', $item->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection