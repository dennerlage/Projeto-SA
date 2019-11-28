<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElementoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codigo = $_GET['cod'];
        $elementos = \App\Elemento::where('OpeCod', '=', $_GET['cod'])->get();
        return view('elemento.index', compact('elementos', 'codigo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $codigo = $id;
        $codigo = 1;
        return view('elemento.create', compact('codigo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $elemento = new \App\Elemento();
        $elemento->EleNom = $request->get('EleNom');
        $elemento->OpeCod = $request->get('OpeCod');
        $elemento->EleRit = $request->get('EleRit');
        $elemento->EleInt = $request->get('EleInt');
        $elemento->EleCon = $request->get('EleCon');
        $elemento->EleQtdVez = $request->get('EleQtdVez');
        $elemento->ElePorPçs = $request->get('ElePorPçs');
        $elemento->save();
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
        $elemento = \App\Elemento::find($id);
        return view('elemento.edit', compact('elemento'));
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
        $elemento = \App\Elemento::find($id);
        $elemento->EleNom = $request->get('EleNom');
        $elemento->EleRit = $request->get('EleRit');
        $elemento->EleInt = $request->get('EleInt');
        $elemento->EleCon = $request->get('EleCon');
        $elemento->EleQtdVez = $request->get('EleQtdVez');
        $elemento->ElePorPçs = $request->get('ElePorPçs');
        $elemento->save();
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
        $elemento = \App\Elemento::find($id);
        $elemento->delete();
        return 'true';
    }
}
