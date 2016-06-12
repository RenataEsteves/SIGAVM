@extends('layouts.master');

@section('Content')

    <div class="container">
        <div class="row">
            <!-- Cabecalho -->
            <div class="col-xs-12 text-center">
                <h1> Configurações do Sistema </h1>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        {{--<form class="form-horizontal" method="post" action="{{route('')}}">--}}
        <div class="col-xs-12 text-center">
            <label for="frete" class="col-xs-1 control-label"><p class="text-left">Frete: </p></label>
            <div class="col-xs-3">
                <input type="text" class="form-control" name="frete" placeholder=$conf>
            </div>
{{--            <td> {{$configuracoes->frete}} </td>--}}
            <div class="form-group">
                <div class="col-xs-offset-11 col-xs-0">
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-saved"></i> Salvar</button>
                </div>
            </div>

        </div>
        {{--</form>--}}

    </div>


@endsection