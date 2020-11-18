@extends('templates.template')

@section('title', 'Cadastrar')

@section('content')

    <div class="row">
        <div class="col">
            
            <h3 class="mt-5 mb-5">@if(isset($usuario)) Editar usuario @else Cadastrar usuario @endif</h3>


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


            @if(isset($usuario))
                <form name="edit_user" id="edit_user" action="{{url("usuarios/$usuario->id")}}" method="POST">
                    @method("PUT")
            @else
                <form name="cad_user" id="cad_user" action="{{url("usuarios")}}" method="POST">
            @endif            

                @csrf

                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" value="{{$usuario->nome ?? ''}}" required>
                </div>

                <div class="form-group">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" id="cidade" name="cidade" value="{{$usuario->cidade ?? ''}}" required>
                </div>

                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" id="telefone" name="telefone" value="{{$usuario->telefone ?? ''}}" required>
                </div>

                <button type="submit" class="btn btn-primary">@if(isset($usuario)) Salvar @else Cadastrar @endif</button>
                <a href="{{ route('usuarios.index') }}" class="btn btn-light">Voltar</a>

            </form>

        </div>
    </div>

   <script>
      $("#message").delay(3200).fadeOut(300);
   </script>    
@endsection
