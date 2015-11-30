@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-8 col-xs-offset-4">
                    <br>
                    <h1> Listagem de Membros </h1>
                    <br>
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
                            <th>Instituição</th>
                            <th>Ano Cad</th>
                            <th>Situação</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $count = 0 ?>
                            @foreach($membros as $membro)
                                    <tr>
                                        <td>{{++$count}}</td>
                                        <td style="width: 15%">{{ $membro->nome }}</td>
                                        <td>{{ $membro->cpf }}</td>
                                        <td>{{ $membro->fone }}</td>
                                        <td>{{ $membro->email }}</td>
                                        <td>{{ $membro->id_Inst }}</td>
                                        <td>{{ $membro->anoCadastro }}</td>
                                        <td>{{ $membro->ativo  == 1 ? 'Ativo':'Inativo' }}</td>
                                        <td><a href="{{ route('membros.show', $membro->id) }}" class="btn btn-sm btn-primary">Detalhes</a> </td>
                                        <td><a href="{{ route('membros.edit', $membro->id) }}" class="btn btn-sm btn-success">Editar</a> </td>
                                        <td><form method="POST" accept-charset="UTF-8" action="/membros/{{ $membro->id }}">
                                            <button type="submit" class="btn btn-sm btn-danger">Deletar</button>
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form></td>
                                        {{--<td><button class="btn btn-deletar btn-sm" type="button" data-toggle="modal" data-target="#__form">--}}
                                                {{--<i class="glyphicon glyphicon-trash"></i> Deletar--}}
                                            {{--</button></td>--}}
                                     {{--</tr>--}}
                            @endforeach
                        </tbody>
                    </table>
                 </div>
            </div>
        </div>
    </div>
@endsection