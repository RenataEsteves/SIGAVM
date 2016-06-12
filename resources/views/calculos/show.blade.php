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

                <form class="form-horizontal" method="post" action="/calculos/exibir">
                    <div class="form-horizontal col-xs-6">
                        {{--Div do mês--}}
                        <div class="form-group ">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-indent-left"></i> Buscar</button>
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                            {{ csrf_field() }}
                            <label for="mesRef" class="col-xs-2 control-label"><p class="text-left">Mês:</p></label>
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
                </form>
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
                                <td> {{ isset($calculos->qtdFrete) ? $calculos->qtdFrete : '0' }} </td>
                                <td> R$ {{ isset($calculos->frete) ? $calculos->frete : '0' }} </td>
                                <td> R$ {{ isset($calculos->valBruto) ? $calculos->valBruto : '0' }} </td>
                                <td> R$ {{ isset($calculos->valDiaa) ? $calculos->valDiaa : '0' }} </td>
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
                                    <td> {{ isset($calculos->qtd1Dia) ? $calculos->qtd1Dia : '0' }} </td>
                                    <td> {{ isset($calculos->t1Dia) ? $calculos->t1Dia : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td> {{ isset($calculos->qtd2Dias) ? $calculos->qtd2Dias : '0' }} </td>
                                    <td> {{ isset($calculos->t2Dias) ? $calculos->t2Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td> {{ isset($calculos->qtd3Dias) ? $calculos->qtd3Dias : '0' }} </td>
                                    <td> {{ isset($calculos->t3Dias) ? $calculos->t3Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td> {{ isset($calculos->qtd4Dias) ? $calculos->qtd4Dias : '0' }} </td>
                                    <td> {{ isset($calculos->t3Dias) ? $calculos->t3Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td> {{ isset($calculos->qtd5Dias) ? $calculos->qtd5Dias : '0' }} </td>
                                    <td> {{ isset($calculos->t4Dias) ? $calculos->t4Dias : '0' }} </td>
                                </tr>
                                <!-- Total Geral -->
                                <tr>
                                    <th>Total Geral</th>
                                    <td> {{ isset($calculos->qtdGeral) ? $calculos->qtdGeral : '0' }} </td>
                                    <td> {{ isset($calculos->tGeralzao) ? $calculos->tGeralzao : '0' }} </td>
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
                                    <td> R$ {{ isset($calculos->ValPag1Dia) ? $calculos->ValPag1Dia : '0' }} </td>
                                    <td> R$ {{ isset($calculos->ValTaxPag1Dia) ? $calculos->ValTaxPag1Dia : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td> R$ {{ isset($calculos->ValPag2Dias) ? $calculos->ValPag2Dias : '0' }} </td>
                                    <td> R$ {{ isset($calculos->ValTaxPag2Dias) ? $calculos->ValTaxPag2Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td> R$ {{ isset($calculos->ValPag3Dias) ? $calculos->ValPag3Dias : '0' }} </td>
                                    <td> R$ {{ isset($calculos->ValTaxPag3Dias) ? $calculos->ValTaxPag3Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td> R$ {{ isset($calculos->ValPag4Dias) ? $calculos->ValPag4Dias : '0' }} </td>
                                    <td> R$ {{ isset($calculos->ValTaxPag4Dias) ? $calculos->ValTaxPag4Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td> R$ {{ isset($calculos->ValPag5Dias) ? $calculos->ValPag5Dias : '0' }} </td>
                                    <td> R$ {{ isset($calculos->ValTaxPag5Dias) ? $calculos->ValTaxPag5Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>Total Geral</th>
                                    <td> R$ {{ isset($calculos->ValPagGeral) ? $calculos->ValPagGeral : '0' }} </td>
                                    <td> R$ {{ isset($calculos->ValTaxPagGeral) ? $calculos->ValTaxPagGeral : '0' }} </td>
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
                                    <td> R$ {{ isset($calculos->val1Dia) ? $calculos->val1Dia : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td> R$ {{ isset($calculos->val2Dias) ? $calculos->val2Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td> R$ {{ isset($calculos->val2Dias) ? $calculos->val2Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td> R$ {{ isset($calculos->val2Dias) ? $calculos->val2Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td> R$ {{ isset($calculos->val2Dias) ? $calculos->val2Dias : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>Total Geral</th>
                                    <td> R$ {{ isset($calculos->val2Dias) ? $calculos->val2Dias : '0' }} </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection