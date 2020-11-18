@extends('templates.template')

@section('title', 'Cadastrar')

@section('content')

    <div class="row">
        <div class="col">
            
            <h3 class="mt-5 mb-5">Cadastrar</h3>

            <form>
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="password" class="form-control" id="cidade" name="cidade" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="password" class="form-control" id="telefone" name="telefone" required>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ url('/') }}" class="btn btn-light">Voltar</a>

            </form>

        </div>
    </div>
@endsection
