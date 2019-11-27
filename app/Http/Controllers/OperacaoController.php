<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operacoes = \App\Operacao::get();
        return view('operacao.index', compact('operacoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operacao.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operacao = new \App\Operacao();
        $operacao->OpeNom = $request->get('OpeNom');
        $operacao->ProCod = $request->get('ProCod');
        $operacao->OpeMaq = $request->get('OpeMaq');
        $operacao->OpeTipEst = $request->get('OpeTipEst');
        $operacao->OpeCro = $request->get('OpeCro');
        $operacao->save();
        return 'true';
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
         $operacao = \App\Operacao::find($id);
        return view('operacao.edit', compact('operacao'));
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
        $operacao = \App\Operacao::find($id);
        $operacao->OpeNom = $request->get('OpeNom');
        $operacao->ProCod = $request->get('ProCod');
        $operacao->OpeMaq = $request->get('OpeMaq');
        $operacao->OpeTipEst = $request->get('OpeTipEst');
        $operacao->OpeCro = $request->get('OpeCro');
        $operacao->save();
        return 'true';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $operacao = \App\Operacao::find($id);
        $operacao->delete();
        return 'true';
    }
}