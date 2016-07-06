@extends('layouts.master')

@section('Content')
    <div class="container">

        <div class="row">
            <!-- Cadastro -->
            <div class="col-xs-12 text-center">
                <h1> Editando Instituição </h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <!--Inicio do Formulário-->
                <form class="form-horizontal" method="post" action="/instituicao/{{$instituicao->id}}">
                    {{ csrf_field() }}
                            <!--Nome do Acadêmico-->
                    <div class="form-group">
                        <legend>Dados da Instituição de Ensino</legend>
                        <label for="nomeinst" class="col-xs-2"><p class="text-left">Nome da Instuição de Ensino:</p></label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="nome" value="{{$instituicao->nome}}" placeholder="Ex.: Centro Universitário... / Universidade Federal..." />
                        </div>
                    </div>

                    <!--Telefone -->
                    <div class="form-group">
                        <label for="emailinst" class="col-xs-2 control-label"><p class="text-left">E-mail:</p></label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="email" value="{{$instituicao->email}}" placeholder="Ex.: email@outlook.com / email@gmail.com" />
                        </div>

                        <label for="telinst" class="col-xs-1 control-label">Fone:</label>
                        <div class="col-xs-2">
                            <input type="text" class="form-control phone" name="fone" value="{{$instituicao->fone}}" placeholder="Ex.: (00) 00000-0000" size=15/>
                        </div>
                    </div>

                    <!--Endereço-->
                    <div class="form-group">
                        <legend>Endereço</legend>
                        <label for="ruainst" class="col-xs-2 control-label"><p class="text-left">Rua:</p></label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="rua" value="{{$instituicao->rua}}" placeholder="Rua / Av..." />
                        </div>
                        <label for="ninst" class="col-xs-1 control-label">Número:</label>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="numero" value="{{$instituicao->numero}}" placeholder="Número" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bairroinst" class="col-xs-2 control-label"><p class="text-left">Bairro:</p></label>
                        <div class="col-xs-4">
                            <input type="text" class="form-control" name="bairro" value="{{$instituicao->bairro}}" placeholder="Bairro / Setor" />
                        </div>
                        <label for="cidadeinst" class="col-xs-1 control-label">Cidade:</label>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="cidade" value="{{$instituicao->cidade}}" placeholder="Cidade, UF" />
                        </div>
                    </div>

                    <!--Botão enviar-->
                    <div class="form-group">
                        <div class=" col-xs-offset-11 col-xs-0">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-ok"></i> Salvar</button>
                            {{csrf_field()}}
                            {{method_field('PUT')}}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection