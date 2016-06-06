@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 text-center">
                    <br>
                    <h1> Cálculos Anteriores </h1>
                    <br>
                </div>

                {{--Div que engloba os dois forms (Qt. Frete e Mes)--}}
                <div class="form-horizontal col-xs-6">
                    {{--Div do mês--}}
                    <div class="form-group ">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-indent-left"></i> Buscar</button>
                        <label for="mesRef" class="col-xs-2 text-left"><p>Mês:</p></label>
                        <div class="col-xs-6">
                            <select class="form-control" name="mes">
                                <option value="1">Janeiro</option>
                                <option value="2">Fevereiro</option>
                                <option value="3">Março</option>
                                <option value="4">Abril</option>
                                <option value="5">Maio</option>
                                <option value="6">Junho</option>
                                <option value="7">Julho</option>
                                <option value="8">Agosto</option>
                                <option value="9">Setembro</option>
                                <option value="10">Outubro</option>
                                <option value="11">Novembro</option>
                                <option value="12">Dezembro</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <div class="col-xs-6">
                        <table class="table table-striped">
                            <tr>
                                <th> Qt. de Fretes</th>
                                <th> Valor do Frete</th>
                                <th> Valor do Mensal</th>
                                <th> Valor/Dia</th>
                            </tr>

                            <tr>
                                <td>  Teste </td>
                            </tr>

                        </table>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-4">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Dia(s)</th>
                                    <th>Qt. de Academicos</th>
                                    <th>Total</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>  Teste </td>
                                </tr>
                                <!-- Total Geral -->
                                <tr>
                                    <th>Total Geral</th>
                                    <td>  Teste </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="table-responsive">
                            <table class="table table-striped">

                                <tr>
                                    <th>Dia(s)</th>
                                    <th>Valores a pagar</th>
                                    <th>Valores com taxa</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>Total Geral</th>
                                    <td>  Teste </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>Dia(s)</th>
                                    <th>Valores arrecadados</th>
                                </tr>
                                <tr>
                                    <th>1</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>  Teste </td>
                                </tr>
                                <tr>
                                    <th>Total Geral</th>
                                    <td>  Teste </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection