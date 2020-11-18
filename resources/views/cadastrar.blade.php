@extends('templates.template')

@section('title', 'Cadastrar')

@section('content')

    <div class="row">
        <div class="col">
            
            <h3 class="mt-5 mb-5">Cadastrar</h3>


            @if(isset($errors) && count($errors) > 0)
                <div id="message" class="alert alert-danger" role="alert">
                    Ops.. Encontramos alguns erros: <br>
                    <ul>
                        @foreach($errors->all() as $erro)
                            <li> {{$erro}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form name="form_user" id="form_user" action="{{url("/")}}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" required>
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-light">Voltar</a>

            </form>

        </div>
    </div>

   <script>
      $("#message").delay(3200).fadeOut(300);
   </script>    
@endsection
