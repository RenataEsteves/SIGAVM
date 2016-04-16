@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 text-center">
                    <br>
                    <h1> Instituição [Detalhes] </h1>
                    <br>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped"> {{--action="/instituicaos/{{$instituicao->id}}"--}}
                        {{--{{ csrf_field() }}--}}
                        <legend> Dados Cadastrais </legend>
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Fone</th>
                            <th>E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $instituicao->id }}</td>
                            <td>{{ $instituicao->nome }}</td>
                            <td>{{ $instituicao->fone }}</td>
                            <td>{{ $instituicao->email }}</td>
                        </tr>
                        </tbody>

                        {{--Tabela de enderecos--}}
                        <table class="table table-striped">
                            <br>
                            <thead>
                            <tr>
                                <th>Rua</th>
                                <th>Número</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $instituicao->rua }}</td>
                                <td>{{ $instituicao->numero }}</td>
                                <td>{{ $instituicao->bairro }}</td>
                                <td>{{ $instituicao->cidade }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>
            <div class="col-xs-offset-11 col-xs-2">
                <a href="/instituicao" type="button" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>
            </div>
        </div>
    </div>
@endsection