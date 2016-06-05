<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calculos extends Model
{
    protected $fillable = [ 'mess', 'qtdFrete', 'valBruto', 'frete', 'valDiaa', 'valMensal', 'valDia', 'qtd1Dia', 'qtd2Dias', 'qtd3Dias', 'qtd4Dias', 'qtd5Dias',
        'Totalqtd1Dia', 'Totalqtd2Dias', 'Totalqtd3Dias', 'Totalqtd4Dias', 'Totalqtd5Dias', 'ValPag1Dia', 'ValPag2Dias', 'ValPag3Dias',
        'ValPag4Dias', 'ValPag5Dias', 'ValTaxPag1Dia', 'ValTaxPag2Dias', 'ValTaxPag3Dias', 'ValTaxPag4Dias', 'ValTaxPag5Dias',
    'val1Dia', 'val2Dias', 'val3Dias', 'val4Dias', 'val5Dias', 'qtdGeral', 'valGeral', 'TotalqtdGeral', 'ValPagGeral', 'ValTaxPagGeral'];
}