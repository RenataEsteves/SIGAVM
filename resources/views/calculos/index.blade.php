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

                <div class="col-xs-12">
                    <label for="qtfrete" class="col-xs-2 text-left"><p class="text-left">Qt de Fretes:</p></label>
                    <div class="col-xs-1">
                        <input type="text" class="form-control" name="qt_frete" />
                    </div>
                    <div class="col-xs-2">
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-retweet"></i> Calcular</button>
                    </div>
                    <div class="table table-striped">
                        <div class="col-xs-6">
                            <table class="table table-striped" align="center">
                                <th>
                                    <td> Qt. de Fretes</td>
                                    <td> Valor do Frete</td>
                                    <td> Valor do Mensal</td>
                                    <td> Valor/Dia</td>
                                </th>

                                <tr>
                                    <td> 22</td>
                                    <td>{{ ($calculos->get('frete')) }}</td>
                                    <td> R$ 9.325,05</td>
                                    <td> R$ 39,02</td>
                                </tr>
                            </table>
                        </div>

                    </div>


                </div>

                <div class="col-xs-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tread>
                            <th>
                                <td>Dia(s)</td>
                                <td>Qt. de Academicos</td>
                                <td>Total</td>
                            </th>
                            </tread>
                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>5</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>6</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>7</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>4</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>20</td>
                                <td>100</td>
                            </tr>
                            <!-- Total Geral -->
                            <th>
                                <td>Total Geral</td>
                                <td>42</td>
                                <td>158</td>
                            </th>
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Dia(s)</th>
                                <th>Valores a pagar</th>
                                <th>Valores com taxa</th>
                            </tr>
                            </thead>
                            <tr>
                                <th>1</th>
                                <th>R$ 40,00</th>
                                <th>R$ 42,25</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Dia(s)</th>
                                <th>Valores a arrecadar</th>
                            </tr>
                            </thead>
                            <tr>
                                <th>1</th>
                                <th>R$ 40,00</th>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection