@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 text-center">
                    <br>
                    <h1> Membro [Detalhes] </h1>
                    <br>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped"> {{--action="/membros/{{$membro->id}}"--}}
                        {{--{{ csrf_field() }}--}}
                        <legend> Dados Pessoais </legend>
                        <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>RG</th>
                            <th>Org Emissor</th>
                            <th>CPF</th>
                            <th>Fone</th>
                            <th>Fone Emerg</th>
                            <th>E-mail</th>
                            <th>Ano Cad</th>
                            {{--<th>Qtd Dias</th>--}}
                            <th>Situação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{ $membro->id }}</td>
                            <td style="width: 15%">{{ $membro->nome }}</td>
                            <td>{{ $membro->rg }}</td>
                            <td>{{ $membro->orgaoEmissor }}</td>
                            <td>{{ $membro->cpf }}</td>
                            <td>{{ $membro->fone }}</td>
                            <td>{{ $membro->foneEmerg }}</td>
                            <td>{{ $membro->email }}</td>
                            <td>{{ $membro->anoCadastro }}</td>
{{--                            <td>{{ $membro->qtdDias }}</td>--}}
                            <td>{{ $membro->ativo  == 1 ? 'Ativo':'Inativo' }}</td>
                        </tr>
                        </tbody>

                        {{--Tabela de enderecos--}}
                        <table class="table table-striped">
                            {{--<br>--}}
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
                                <td>{{ $membro->rua }}</td>
                                <td>{{ $membro->numero }}</td>
                                <td>{{ $membro->bairro }}</td>
                                <td>{{ $membro->cidade }}</td>
                            </tr>
                            </tbody>
                        </table>

                        {{--Tabela de Instituição--}}
                        <table class="table table-striped">
                            <br>
                            <legend> Instituição </legend>
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Fone</th>
                                <th>E-mail</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $instituicao->nome }}</td>
                                <td>{{ $instituicao->fone }}</td>
                                <td>{{ $instituicao->email }}</td>
                            </tr>
                            </tbody>
                        </table>

                    </table>
                </div>
            </div>
            <div class="col-xs-offset-11 col-xs-1">
                {{--<a href="/membros" class="btn btn-sm btn-default">Voltar</a>--}}
                <a href="/membros" type="button" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</a>
            </div>
        </div>
    </div>
@endsection