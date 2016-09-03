@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h1> Editando Receitas </h1>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-xs-12">
                <!--Inicio do Formulário-->
                <form class="form-horizontal" method="post" action="/receitas/{{$receita->id}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="titulo" class="col-xs-1 control-label"><p class="text-left">Titulo:</p></label>
                        <div class="col-xs-3">
                            <input type="text" class="form-control" name="titulo" value="{{$receita->titulo}}" placeholder="Título" size=10 />
                        </div>

                        <label for="valor" class="col-xs-1 control-label"><p class="text-left">Valor:</p></label>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="valor" value="{{$receita->valor}}" placeholder="0,00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao" class="col-xs-1 control-label"><p class="text-left">Descrição:</p></label>
                        <div class="col-xs-10">
                            <textarea name="descricao" rows="7" cols="5" class="form-control" value="{{$receita->descricao}}" placeholder="Escreva..."></textarea>
                        </div>
                    </div>

                    <!--Botão enviar-->
                    <div class="form-group">
                        <div class="col-xs-offset-10 col-xs-0">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-saved"></i> Alterar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection