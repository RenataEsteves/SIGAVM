<?php

namespace App\Http\Controllers;

use App\Instituicao;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InstituicaoController extends Controller
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
        $instituicaos = instituicao::all();

        return view('instituicao.index', compact('instituicaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('instituicao.create');
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
        $instituicao = new Instituicao();
        $instituicao->create($input);
        return redirect('/instituicao');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instituicaos = new Instituicao();
        $instituicao = $instituicaos->find($id);
        return view('instituicao.show', compact('instituicao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instituicao = Instituicao::findOrFail($id);

        return view('/instituicao.edit', array('instituicao' => $instituicao));
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
        $input = $request->all();

        $instituicao = instituicao::find($id);
        $instituicao->fill($input);
        $instituicao->save();
        return redirect('/instituicao');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instituicao = Instituicao::findOrFail($id);
        $instituicao->delete();

        return redirect('/instituicao');
    }
}
