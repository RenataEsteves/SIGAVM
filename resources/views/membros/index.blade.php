@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 text-center">
                    <br>
                    <h1> Listagem de Membros </h1>
                    <br>
                </div>

                <div class="col-xs-12">
                    <button onclick="location.href='membros/create'" type="button" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Adicionar</button>
                </div>

                <div class="table-responsive">   {{--}} <label>{{ sizeof($membros) }}</label>--}}
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Contato</th>
                            <th>E-mail</th>
                            <th>Ano Cad</th>
                            <th>Situação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 0 ?>
                        @foreach($membros as $membro)
                            <tr>
                                <td>{{++$count}}</td>
                                <td style="width: 20%">{{ $membro->nome }}</td>
                                <td>{{ $membro->cpf }}</td>
                                <td style="width: 12%">{{ $membro->fone }}</td>
                                <td style="width: 18%">{{ $membro->email }}</td>
                                <td>{{ $membro->anoCadastro }}</td>
                                <td>{{ $membro->ativo  == 1 ? 'Ativo':'Inativo' }}</td>
                                <td><a href="{{ route('membros.show', $membro->id) }}" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-list-alt"></i> Detalhes</a> </td>
                                <td><a href="{{ route('membros.edit', $membro->id) }}" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"></i> Editar</a> </td>
                                <td>
                                    {{--<td><form method="POST" accept-charset="UTF-8" action="/membros/{{ $membro->id }}">--}}
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" onclick="deletModal({{ $membro }})" data-target="#confirm_delet{{ $membro->id }}"><i class="glyphicon glyphicon-trash"></i> Deletar</button>
                                    {{--</form></td>--}}
                                </td>
                            </tr>
                            @include('membros.confirm_delet',['membro'=>$membro])
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection