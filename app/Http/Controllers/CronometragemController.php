<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CronometragemController extends Controller
{

    public function index()
    {
        return view('cronometragem.index');
    }
    
    public function getTomadaTempo(){
        $codigoTomadaTempo = $_GET['cod'];
        $tomada = \App\TomadaTempo::where('TomCod', '=', $codigoTomadaTempo)->get();
        
        return $tomada[0];
    }
    
    public function getElementos(){
        $codigoOperacao = $_GET['cod'];
        
        $elementos = \App\Elemento::where('OpeCod', '=', $codigoOperacao)->get();
        
        return $elementos;
    }
    
    public function guardar(Request $request){
        $cronometragem = new \App\Cronometragem();
        $cronometragem->CroNroLei = $request->get('CroNroLei');
        $cronometragem->TomCod = $request->get('TomCod');
        $cronometragem->EleCod = $request->get('EleCod');
        $tempo = $request->get('CroTem');
        $tempo = str_replace(' ', '', $tempo);
        $cronometragem->CroTem = $tempo;
        $cronometragem->save();
        return true;
    }

}