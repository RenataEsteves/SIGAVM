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
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $calculos = Calculos::all()->sortBy('mes');
//        dd($calculos);
        return view('calculos.index', compact('calculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

//        Busca a ultima linha da tabela configurações
        $valFrete = DB::table('configuracoes')
            ->orderBy('id', 'desc')
            ->take(1)
            ->select('frete')
            ->get();

        $fretes = $request->get('qt_frete'); //Busca quantidade de fretes feitos no mes

        $valorFrete = $valFrete[0]->frete; //Busca valor do frete.

        $freteBruto = ($fretes * $valorFrete); //Calcula valor bruto so de fretes.

        $qt1Dia = DB::table('membros')->where('qtdDias', 1)->count();//Acumula quantidade de pessoas que vai 1 dia;
        $qt2Dias = DB::table('membros')->where('qtdDias', 2)->count();//Acumula quantidade de pessoas que vai 2 dias;
        $qt3Dias = DB::table('membros')->where('qtdDias', 3)->count();//Acumula quantidade de pessoas que vai 3 dias;
        $qt4Dias = DB::table('membros')->where('qtdDias', 4)->count();//Acumula quantidade de pessoas que vai 5 dias;
        $qt5Dias = DB::table('membros')->where('qtdDias', 5)->count();//Acumula quantidade de pessoas que vai 5 dias;
        $qGeral = ($qt1Dia + $qt2Dias + $qt3Dias + $qt4Dias + $qt5Dias);

        $qtt1Dia = ($qt1Dia * 1);//Acumula os dias das pessoas que vão 1 dia
        $qtt2Dias = ($qt2Dias * 2);//Acumula os dias das pessoas que vão 2 dias
        $qtt3Dias = ($qt3Dias * 3);//Acumula os dias das pessoas que vão 3 dias
        $qtt4Dias = ($qt4Dias * 4);//Acumula os dias das pessoas que vão 4 dias
        $qtt5Dias = ($qt5Dias * 5);//Acumula os dias das pessoas que vão 5 dias
        $diasTotal = ($qtt1Dia + $qtt2Dias + $qtt3Dias + $qtt4Dias + $qtt5Dias);

        $valorDia = round($freteBruto / $diasTotal); //Calcula valor do diad

        //Quadro 'Valores a Pagar', 'Valores com Taxa'
        $v1dia = $valorDia;
        $v2dias = ($valorDia * 2);
        $v3dias = ($valorDia * 3);//Valor sem taxa de 3 dias.
        $v4dias = ($valorDia * 4);
        $v5dias = ($valorDia * 5);
        $vGeral = ($v1dia + $v2dias + $v3dias + $v4dias + $v5dias);
        $vT1dia = ($v1dia + 2.50);
        $vT2dias = ($v2dias + 2.50);
        $vT3dias = ($v3dias + 2.50);//Valor taxado de 3 dias.
        $vT4dias = ($v4dias + 2.50);
        $vT5dias = ($v5dias + 2.50);
        $vtGeral = ($vT1dia + $vT2dias + $vT3dias + $vT4dias + $vT5dias);

        //Quadro 'Valores a Arrecadar'
        $vlrAr1dia = $qt1Dia * $v1dia; //Valor arrecadado por aqueles que pagam 1 dia.
        $vlrAr2dias = $qt2Dias * $v2dias; //Valor arrecadado por aqueles que pagam 2 dias.
        $vlrAr3dias = $qt3Dias * $v3dias; //Valor arrecadado por aqueles que pagam 3 dias.
        $vlrAr4dias = $qt4Dias * $v4dias; //Valor arrecadado por aqueles que pagam 4 dias.
        $vlrAr5dias = $qt5Dias * $v5dias; //Valor arrecadado por aqueles que pagam 5 dias.
        $vlrGeral = ($vlrAr1dia + $vlrAr2dias + $vlrAr3dias + $vlrAr4dias + $vlrAr5dias);

        $calculos = array(
            'frete' => $fretes, //Quantidade de fretes feito no mes
            'valFrete' => $valorFrete, //valor do frete.
            'valDia' => $valorDia, //Valor do dia.
            'fretB' => $freteBruto, //frete bruto

            'q1Dia' => $qt1Dia, //Acumula quantidade de pessoas que vai 1 dia;
            'q2Dias' => $qt2Dias, //Acumula quantidade de pessoas que vai 2 dias;
            'q3Dias' => $qt3Dias, //Acumula quantidade de pessoas que vai 3 dias;
            'q4Dias' => $qt4Dias, //Acumula quantidade de pessoas que vai 4 dias;
            'q5Dias' => $qt5Dias, //Acumula quantidade de pessoas que vai 5 dias;
            'qGeralzao' => $qGeral, //Acumula quantidade geral;

            't1Dia' => $qtt1Dia,
            't2Dias' => $qtt2Dias,
            't3Dias' => $qtt3Dias, //Acumula os dias das pessoas que vão 3 dias
            't4Dias' => $qtt4Dias,
            't5Dias' => $qtt5Dias,
            'tGeralzao' => $diasTotal,

            'v1Dia' => $v1dia,
            'v2Dias' => $v2dias,
            'v3Dias' => $v3dias,//Valor sem taxa de 3 dias.
            'v4Dias' => $v4dias,
            'v5Dias' => $v5dias,
            'vt1Dia' => $vT1dia,
            'vGeralzao' => $vGeral,
            'vt2Dias' => $vT2dias,
            'vt3Dias' => $vT3dias,//Valor taxado de 3 dias.
            'vt4Dias' => $vT4dias,
            'vt5Dias' => $vT5dias,
            'vtGeralzao' => $vtGeral,

            'a1Dia' => $vlrAr1dia,
            'a2Dias' => $vlrAr2dias,
            'a3Dias' => $vlrAr3dias,//Valor arrecadado por aqueles que pagam 3 dias.
            'a4Dias' => $vlrAr4dias,
            'a5Dias' => $vlrAr5dias,
            'aGeralzao' => $vlrGeral,

        );
        return view('calculos.index', compact('calculos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $calculos = new Calculos();

        $calculos->create($input);

        return redirect('calculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('calculos.show');
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
    public function exibir($mes)
    {

        $Mes_ref = $mes;
        dd($Mes_ref);

//        $calculo = $request->get('mes');
        $calculo = DB::table('calculos')->where('mes', $Mes_ref)->get();
        $calculos = $calculo[0];//Tras os valores para fora do indice 0.

        return view('calculos.show', compact('calculos'));

    }
}
