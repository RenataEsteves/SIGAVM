@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 text-center">
                    <br>
                    <h1> Listagem de Receitas </h1>
                    <br>
                </div>

                <div class="col-xs-12">
                    <button onclick="location.href='receitas/create'" type="button" class="btn btn-default"><i
                                class="glyphicon glyphicon-plus"></i> Adicionar
                    </button>
                </div>

                @if(!empty($receitas))
                    Sem dados!
                @else
                    <div class="table-responsive">   {{--}} <label>{{ sizeof($membros) }}</label>--}}
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Valor</th>
                                <th>Descrição</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $count = 0 ?>
                            <?php $total = 0 ?>
                            @foreach($receitas as $receita)
                                <tr>
                                    <td>{{++$count}}</td>
                                    <td style="width: 25%">{{ $receita->titulo }}</td>
                                    <td> R$ {{ $receita->valor }}</td>
                                    <td style="width: 40%">{{ $receita->descricao }}</td>
                                    <td><a href="{{ route('receitas.show', $receita->id) }}" class="btn btn-sm btn-primary"><i
                                                    class="glyphicon glyphicon-list-alt"></i> Detalhes</a></td>
                                    <td><a href="{{ route('receitas.edit', $receita->id) }}" class="btn btn-sm btn-success"><i
                                                    class="glyphicon glyphicon-edit"></i> Editar</a></td>
                                    <td>
                                        {{--<td><form method="POST" accept-charset="UTF-8" action="/receitas/{{ $receita->id }}">--}}
                                        <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                                onclick="deletModal({{ $receita }})"
                                                data-target="#confirm_delet{{ $receita->id }}"><i
                                                    class="glyphicon glyphicon-trash"></i> Deletar
                                        </button>
                                        {{--</form></td>--}}
                                    </td>
                                </tr>
                                @include('receitas.confirm_delet',['receita'=>$receita])
                                <?php $total += $receita->valor ?>
                            @endforeach
                            </tbody>
                        </table>
                        <div class="col-xs-3">
                            <label for="descricao" class="col-xs-1 control-label"><p class="text-left">Total:</p></label>
                        </div>
                        <div>
                            <td class="col-xs-4"> R$ {{$total}} </td>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
