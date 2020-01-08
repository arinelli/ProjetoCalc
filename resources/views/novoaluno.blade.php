@extends('layout.app', ["current" => "produtos"])

@section('body')




    <div class="card border">
        <div class="card-body">
            <form action="/alunos" method="POST">
                @csrf
                <div class="form-group">

                    <label for="nomeMae">Nome da Mãe</label>
                    <input type="text" class="form-control" name="nomeMae"
                           id="nomeMae" placeholder="Nome da Mae">
                    <br/>

                    <label for="nomePai">Nome do Pai</label>
                    <input type="text" class="form-control" name="nomePai"
                           id="nomePai" placeholder="Nome do Pai">
                    <br/>


                    <label for="estadoCivil">Estado Civil</label>
                    <input type="text" class="form-control" name="estadoCivil"
                           id="estadoCivil" placeholder="Estado Civil">

                    <br/>


                    <label for="naturalidade">Naturalidade</label>
                    <input type="text" class="form-control" name="naturalidade"
                           id="naturalidade" placeholder="Naturalidade">

                    <br/>

                    <label for="formacao">Formação</label>
                    <input type="text" class="form-control" name="formacao"
                           id="formacao" placeholder="Formacao">



                    <label for="tipodocumento">Tipo de Documento</label>
                    <input type="text" class="form-control" name="tipodocumento"
                           id="tipodocumento" placeholder="Tipo de Documento">
                    <br/>

                    <label for="numerodocumento">Numero do Documento</label>
                    <input type="text" class="form-control" name="numeroDocumento"
                           id="numeroDocumento" placeholder="Numero do Documento">

                    <br/>

                    <label for="orgaoexp">Orgão Expedidor</label>
                    <input type="text" class="form-control" name="orgaoexp"
                           id="orgaoexp" placeholder="Orgão Expedidor">

                    <br/>

                    <label for="datanascimento">Data de Nascimento</label>
                    <input type="date" class="form-control" name="datanascimento"
                           id="datanascimento" placeholder="Data de Nascimento">

                    <br/>

                    <label for="nacionalidade">Nacionalidade</label>
                    <input type="text" class="form-control" name="nacionalidade"
                           id="nacionalidade" placeholder="Nacionalidade">

                    <br/>


                    <label for="uf">Unidade Federativa</label>
                    <input type="text" class="form-control" name="uf"
                           id="uf" placeholder="Unidade Federativa">

                    <br/>

                    <label for="matricula">Matrícula</label>
                    <input type="text" class="form-control" name="matricula"
                           id="matricula" placeholder="Matricula">

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
