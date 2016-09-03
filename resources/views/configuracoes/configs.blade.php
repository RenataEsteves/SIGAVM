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
        <div class="col-xs-12">
            <button onclick="location.href='instituicao'" type="button" class="btn btn-default"><i class="glyphicon glyphicon-plus"></i> Instituições</button>
        </div>
        <form class="form-horizontal" method="post" action="{{route('configs.store')}}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-xs-12 text-center">
                <label for="frete" class="col-xs-2 control-label"><p class="text-left">Valor do frete: </p></label>
                <div class="col-xs-2">
                    <input type="text" class="form-control" name="frete" value="{{$configuracao->frete}}" />
                </div>
                <div class="form-group">
                    <div class="col-xs-offset-11 col-xs-0">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-saved"></i> Salvar </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection