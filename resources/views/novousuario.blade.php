@extends('layout.app', ["current" => "produtos"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/users" method="POST">
                @csrf
                <div class="form-group">

                    <label for="nomeUsuario">Nome do Usuario</label>
                    <input type="text" class="form-control" name="nomeUsuario"
                           id="nomeUsuario" placeholder="Usuario">
                    <br/>

                    <label for="cpf">CPF</label>
                    <input type="number" class="form-control" name="cpf"
                           id="cpf" placeholder="CPF">

                    <br/>


                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email"
                           id="email" placeholder="Email">

                    <br/>

                    <label for="senha">Senha</label>
                    <input type="text" class="form-control" name="senha"
                           id="senha" placeholder="Senha">


                </div>
                <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
            </form>
        </div>

        @if ($errors->any())

            <div class="card-footer">

                @foreach ($errors->all() as $error)

                    <div class ="alert alert-danger" role="alert">

                        {{$error}}

                    </div>

                @endforeach

            </div>

        @endif

    </div>

@endsection
