<?php

namespace App\Http\Controllers;

use App\Despesas;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DespesasController extends Controller
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

        $despesas = Despesas::all()->sortBy('id');
        return view('despesas.index', compact('despesas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('despesas.create');
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

        $despesa = new Despesas();

        $despesa->create($input);

        return redirect('despesas');
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
        $despesa = Despesas::findOrFail($id);

        return view('/despesas.edit', array('despesa' => $despesa));
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
//        $input = $request->all();
//
//        $instituicao = instituicao::find($id);
//        $instituicao->fill($input);
//        $instituicao->save();
//        return redirect('/instituicao');

        $input = $request->all();
        dd($input);


        $despesa = despesa::find($id);
        $despesa->fill($input);
        $despesa->save();
        return redirect('/despesas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $despesa = Despesas::findOrFail($id);
        $despesa->delete();
        return redirect('/despesas');
    }
}
