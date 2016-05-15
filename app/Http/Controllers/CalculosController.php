<?php

namespace App\Http\Controllers;

use App\Calculos;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class CalculosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calculos = Calculos::all()->sortBy('mes');
        return view('calculos.index', compact('calculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function calcular(Request $request){

        $calculos = DB::table('calculos')->where('mes', $request->get('mes_ref'))->get();

//        dd($request->get('qt_frete'));
        $fretes = $request->get('qt_frete'); //Busca quantidade de fretes feitos no mes

        $valorFrete = $calculos[0]->frete; //Busca valor do frete.

        $freteBruto = ($fretes * $valorFrete); //Calcula valor bruto so de fretes.
        $valorDia = round($freteBruto / $fretes); //Calcula valor do dia [Frete total divido pelos dias]

        $qt1Dia = DB::table('membros')->where('qtdDias', 1)->count();//Acumula quantidade de pessoas que vai 1 dia;
        $qt2Dias = DB::table('membros')->where('qtdDias', 2)->count();//Acumula quantidade de pessoas que vai 2 dia;
        $qt3Dias = DB::table('membros')->where('qtdDias', 3)->count();//Acumula quantidade de pessoas que vai 3 dia;
        $qt4Dias = DB::table('membros')->where('qtdDias', 4)->count();//Acumula quantidade de pessoas que vai 5 dia;
        $qt5Dias = DB::table('membros')->where('qtdDias', 5)->count();//Acumula quantidade de pessoas que vai 5 dia;

        //Quadro 'Valores a Pagar', 'Valores com Taxa'
        $v1dia = $valorDia;
        $v2dias = ($valorDia * 2);
        $v3dias = ($valorDia * 3);
        $v4dias = ($valorDia * 4);
        $v5dias = ($valorDia * 5);
        $vT1dia = ($v1dia + 2.50);
        $vT2dias = ($v2dias + 2.50);
        $vT3dias = ($v3dias + 2.50);
        $vT4dias = ($v4dias + 2.50);
        $vT5dias = ($v5dias + 2.50);

        //Quadro 'Valores a Arrecadar'
        $vlrAr1dia = $qt1Dia * $v1dia; //Valor arrecadado por aqueles que pagam 1 dia.
        $vlrAr2dia = $qt2Dias * $v2dias; //Valor arrecadado por aqueles que pagam 2 dias.
        $vlrAr3dia = $qt3Dias * $v3dias; //Valor arrecadado por aqueles que pagam 3 dias.
        $vlrAr4dia = $qt4Dias * $v4dias; //Valor arrecadado por aqueles que pagam 4 dias.
        $vlrAr5dia = $qt5Dias * $v5dias; //Valor arrecadado por aqueles que pagam 5 dias.

        $calculos = [0 => array(
            'frete' => $fretes,
            'qtdFrete' => $valorFrete,
            'fretB' => $freteBruto
        )];
        return view('calculos.index', compact('calculos'));

    }
}
