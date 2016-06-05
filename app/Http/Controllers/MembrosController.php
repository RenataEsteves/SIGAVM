<?php

namespace App\Http\Controllers;

use App\Instituicao;
use App\Membro;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Monolog\Handler\ErrorLogHandler;

class MembrosController extends Controller
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
        $membros = Membro::all()->sortBy('nome');
        return view('membros.index', compact('membros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insts = Instituicao::all();
        return view('membros.create',compact('insts'));
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

        $membro = new Membro();

        $input["qtdDias"]=count($request->dia);

        $input = $this->check_dias($request->dia, $input);

        $membro->create($input);
        return redirect('membros');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $membros = new Membro();
        $membro = $membros->find($id);
        $instituicao = new Instituicao();
        $instituicao = $instituicao->find($membro->id_Inst);

        return view('membros.show', compact('membro', 'instituicao'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membro = Membro::findOrFail($id);
        $insts = Instituicao::all();
        return view('membros.edit', array('membro' => $membro, 'insts' => $insts));
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
        $membro = Membro::findOrFail($id);
        $input = $request->all();

        $input['segunda'] = isset($request->dia['segunda']) ? 1 : 0;
        $input['terca'] = isset($request->dia['terca']) ? 1 : 0;
        $input['quarta'] = isset($request->dia['quarta']) ? 1 : 0;
        $input['quinta'] = isset($request->dia['quinta']) ? 1 : 0;
        $input['sexta'] = isset($request->dia['sexta']) ? 1 : 0;

        if ($input['ativo'] == 1) {
            $input['qtdDias'] = count($request->dia);
        } else {
            $input['qtdDias'] = 0;
        }

        $membro->fill($input)->save();

        return redirect('/membros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $membro = Membro::findOrFail($id);
        $membro->delete();

        return redirect('/membros');
    }
    private function check_dias ($dia, $input){

        if(isset($dia)) {//Verifica se a variavel esta setada e vazia.

            foreach($dia as $i => $item){//Varre o array um-por-um coloca o indice em "i" e o conteudo do indice em "item"
                $input[$i] = "$item";
            }

            unset($input['dia']);

            return $input;
        }

    }
}
