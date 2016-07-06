@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 text-center">
                    <br>
                    <h1> Listagem de Instituições </h1>
                    <br>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Fone</th>
                            <th>E-mail</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $count = 0 ?>
                        @foreach($instituicaos as $instituicao)
                            <tr>
                                <td>{{++$count}}</td>
                                <td>{{ $instituicao->nome }}</td>
                                <td>{{ $instituicao->fone }}</td>
                                <td style="width: 25%">{{ $instituicao->email }}</td>
                                <td><a href="{{ route('instituicao.show', $instituicao->id) }}" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-list-alt"></i> Detalhes</a> </td>
                                <td><a href="{{ route('instituicao.edit', $instituicao->id) }}" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-edit"></i> Editar</a> </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#confirm_delet"><i class="glyphicon glyphicon-trash"></i> Deletar</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('instituicao.confirm_delet')
@endsection
