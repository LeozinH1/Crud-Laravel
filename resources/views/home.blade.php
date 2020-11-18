@extends('templates.template')

@section('title', 'Home')

@section('content')

    <h3 class="mt-5 mb-5">Usuarios</h3>

    <div class="row">
        <div class="col">
            <a href="{{ url('cadastrar') }}" class="btn btn-success mb-5">Cadastrar</a>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Leonardo S. Jaremczuk</td>
                        <td>Canoinhas-SC</td>
                        <td>(45) 3622-3402</td>
                        <td>
                            <a href="{{ url('visualizar') }}" class="btn btn-light">Visualizar</a>
                            <a href="{{ url('cadastrar') }}" class="btn btn-primary">Editar</a>
                            <a href="{{ url('deletar') }}" class="btn btn-danger">Deletar</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection