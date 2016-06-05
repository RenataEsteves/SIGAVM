@extends('layouts.master')

@section('Content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="col-xs-12 text-center">
                    <br>
                    <h1> Cálculos </h1>
                    <br>
                </div>

                {{--Div que engloba os dois forms (Qt. Frete e Mes)--}}
                <div class="form-horizontal col-xs-6">
                    {{--Form da quantidade de frete com botão calcular--}}
                    <form class="form-horizontal" method="post" action="/calculos/calcular">
                        <div class="form-group">
                            <label for="qtdFrete" class="col-xs-2 text-left"><p>Qt. Frete:</p></label>
                            <div class="col-xs-6">
                                <input type="text" class="form-control" name="qt_frete" />
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-retweet"></i> Calcular</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                    </form>
                    {{--Form do mes de referencia e botão salvar--}}
                    <form class="form-horizontal" method="post" action="{{route('calculos.store')}}">
                        {{--Form do mês--}}
                        <div class="form-group ">
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-floppy-save"></i> Salvar</button>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <label for="mesRef" class="col-xs-2 text-left"><p>Mês:</p></label>
                            <div class="col-xs-6">
                                <select class="form-control" name="mes_ref">
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
                        <input type="hidden" class="form-control" name="mess" value="{{ isset($calculos['mes']) ? $calculos['mess'] : '0' }}" />
                        <input type="hidden" class="form-control" name="qtdFrete" value="{{ isset($calculos['frete']) ? $calculos['frete'] : '0' }}" />
                        <input type="hidden" class="form-control" name="frete" value="{{ isset($calculos['valFrete']) ? $calculos['valFrete'] : '0' }}" />
                        <input type="hidden" class="form-control" name="valBruto" value="{{ isset($calculos['fretB']) ? $calculos['fretB'] : '0' }}" />
                        <input type="hidden" class="form-control" name="valDiaa" value="{{ isset($calculos['valDia']) ? $calculos['valDia'] : '0' }}" />
                        <input type="hidden" class="form-control" name="qtd1Dia" value="{{ isset($calculos['q1Dia']) ? $calculos['q1Dia'] : '0' }}" />
                        <input type="hidden" class="form-control" name="Totalqtd1Dia" value="{{ isset($calculos['t1Dia']) ? $calculos['t1Dia'] : '0' }}" />
                        <input type="hidden" class="form-control" name="qtd2Dias" value="{{ isset($calculos['q2Dias']) ? $calculos['q2Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="Totalqtd2Dias" value="{{ isset($calculos['t2Dias']) ? $calculos['t2Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="qtd3Dias" value="{{ isset($calculos['q3Dias']) ? $calculos['q3Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="Totalqtd3Dias" value="{{ isset($calculos['t3Dias']) ? $calculos['t3Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="qtd4Dias" value="{{ isset($calculos['q4Dias']) ? $calculos['q4Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="Totalqtd4Dias" value="{{ isset($calculos['t4Dias']) ? $calculos['t4Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="qtd5Dias" value="{{ isset($calculos['q5Dias']) ? $calculos['q5Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="Totalqtd5Dias" value="{{ isset($calculos['t5Dias']) ? $calculos['t5Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="qtdGeral" value="{{ isset($calculos['qGeralzao']) ? $calculos['qGeralzao'] : '0' }}" />
                        <input type="hidden" class="form-control" name="TotalqtdGeral" value="{{ isset($calculos['tGeralzao']) ? $calculos['tGeralzao'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValPag1Dia" value="{{ isset($calculos['v1Dia']) ? $calculos['v1Dia'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValTaxPag1Dia" value="{{ isset($calculos['vt1Dia']) ? $calculos['vt1Dia'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValPag2Dias" value="{{ isset($calculos['v2Dias']) ? $calculos['v2Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValTaxPag2Dias" value="{{ isset($calculos['vt2Dias']) ? $calculos['vt2Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValPag3Dias" value="{{ isset($calculos['v3Dias']) ? $calculos['v3Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValTaxPag3Dias" value="{{ isset($calculos['vt3Dias']) ? $calculos['vt3Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValPag4Dias" value="{{ isset($calculos['v4Dias']) ? $calculos['v4Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValTaxPag4Dias" value="{{ isset($calculos['vt4Dias']) ? $calculos['vt4Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValPag5Dias" value="{{ isset($calculos['v5Dias']) ? $calculos['v5Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValTaxPag5Dias" value="{{ isset($calculos['vt5Dias']) ? $calculos['vt5Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValPagGeral" value="{{ isset($calculos['vGeralzao']) ? $calculos['vGeralzao'] : '0' }}" />
                        <input type="hidden" class="form-control" name="ValTaxPagGeral" value="{{ isset($calculos['vtGeralzao']) ? $calculos['vtGeralzao'] : '0' }}" />
                        <input type="hidden" class="form-control" name="val1Dia" value="{{ isset($calculos['a1Dia']) ? $calculos['a1Dia'] : '0' }}" />
                        <input type="hidden" class="form-control" name="val2Dias" value="{{ isset($calculos['a2Dias']) ? $calculos['a2Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="val3Dias" value="{{ isset($calculos['a3Dias']) ? $calculos['a3Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="val4Dias" value="{{ isset($calculos['a4Dias']) ? $calculos['a4Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="val5Dias" value="{{ isset($calculos['a5Dias']) ? $calculos['a5Dias'] : '0' }}" />
                        <input type="hidden" class="form-control" name="valGeral" value="{{ isset($calculos['aGeralzao']) ? $calculos['aGeralzao'] : '0' }}" />

                    </form>
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
                                <td>  {{ isset($calculos['frete']) ? $calculos['frete'] : '------------' }} </td>
                                <td>  R$ {{ isset($calculos['valFrete']) ? $calculos['valFrete'] : '0' }} </td>
                                <td>  R$ {{ isset($calculos['fretB']) ? $calculos['fretB'] : '0' }} </td>
                                <td>  R$ {{ isset($calculos['valDia']) ? $calculos['valDia'] : '0' }} </td>
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
                                    <td>  {{ isset($calculos['q1Dia']) ? $calculos['q1Dia'] : '0' }} </td>
                                    <td>  {{ isset($calculos['t1Dia']) ? $calculos['t1Dia'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>  {{ isset($calculos['q2Dias']) ? $calculos['q2Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['t2Dias']) ? $calculos['t2Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>  {{ isset($calculos['q3Dias']) ? $calculos['q3Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['t3Dias']) ? $calculos['t3Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>  {{ isset($calculos['q4Dias']) ? $calculos['q4Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['t4Dias']) ? $calculos['t4Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>  {{ isset($calculos['q5Dias']) ? $calculos['q5Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['t5Dias']) ? $calculos['t5Dias'] : '0' }} </td>
                                </tr>
                                <!-- Total Geral -->
                                <tr>
                                    <th>Total Geral</th>
                                    <td>  {{ isset($calculos['qGeralzao']) ? $calculos['qGeralzao'] : '0' }} </td>
                                    <td>  {{ isset($calculos['tGeralzao']) ? $calculos['tGeralzao'] : '0' }} </td>
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
                                    <td>  {{ isset($calculos['v1Dia']) ? $calculos['v1Dia'] : '0' }} </td>
                                    <td>  {{ isset($calculos['vt1Dia']) ? $calculos['vt1Dia'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>  {{ isset($calculos['v2Dias']) ? $calculos['v2Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['vt2Dias']) ? $calculos['vt2Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>  {{ isset($calculos['v3Dias']) ? $calculos['v3Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['vt3Dias']) ? $calculos['vt3Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>  {{ isset($calculos['v4Dias']) ? $calculos['v4Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['vt4Dias']) ? $calculos['vt4Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>  {{ isset($calculos['v5Dias']) ? $calculos['v5Dias'] : '0' }} </td>
                                    <td>  {{ isset($calculos['vt5Dias']) ? $calculos['vt5Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>Total Geral</th>
                                    <td>  {{ isset($calculos['vGeralzao']) ? $calculos['vGeralzao'] : '0' }} </td>
                                    <td>  {{ isset($calculos['vtGeralzao']) ? $calculos['vtGeralzao'] : '0' }} </td>
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
                                    <td>  {{ isset($calculos['a1Dia']) ? $calculos['a1Dia'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>2</th>
                                    <td>  {{ isset($calculos['a2Dias']) ? $calculos['a2Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>3</th>
                                    <td>  {{ isset($calculos['a3Dias']) ? $calculos['a3Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>4</th>
                                    <td>  {{ isset($calculos['a4Dias']) ? $calculos['a4Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>5</th>
                                    <td>  {{ isset($calculos['a5Dias']) ? $calculos['a5Dias'] : '0' }} </td>
                                </tr>
                                <tr>
                                    <th>Total Geral</th>
                                    <td>  {{ isset($calculos['aGeralzao']) ? $calculos['aGeralzao'] : '0' }} </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection