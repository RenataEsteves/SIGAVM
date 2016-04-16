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
                            <table class="table table-striped">
                                <tr>
                                    <th> Qt. de Fretes</th>
                                    <th> Valor do Frete</th>
                                    <th> Valor do Mensal</th>
                                    <th> Valor/Dia</th>
                                </tr>

                                <tr>
                                    <th> 22</th>
                                    <th> 670,00</th>
                                    <th> R$ 9.325,05</th>
                                    <th> R$ 39,02</th>
                                </tr>

                            </table>
                        </div>

                    </div>


                </div>

                <div class="col-xs-4">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Dia(s)</th>
                                <th>Qt. de Academicos</th>
                                <th>Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th>1</th>
                                <th>5</th>
                                <th>5</th>
                            </tr>
                            <tr>
                                <th>2</th>
                                <th>6</th>
                                <th>12</th>
                            </tr>
                            <tr>
                                <th>3</th>
                                <th>7</th>
                                <th>21</th>
                            </tr>
                            <tr>
                                <th>4</th>
                                <th>4</th>
                                <th>20</th>
                            </tr>
                            <tr>
                                <th>5</th>
                                <th>20</th>
                                <th>100</th>
                            </tr>
                            <!-- Total Geral -->
                            <tr>
                                <th>Total Geral</th>
                                <th>42</th>
                                <th>158</th>
                            </tr>
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
            </div>
        </div>
    </div>
@endsection