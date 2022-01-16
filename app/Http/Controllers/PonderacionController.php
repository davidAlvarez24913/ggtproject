<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class PonderacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('gad',['only'=>['index'] ]);
        
    }
    public function index()
    {
        return view('gad.home');
    }
    public function validacion()
    {
        return view('gad.validacion');
    }
    public function ponderacion()
    {
        // aqui voy a mostrar los resultados
        $recuperado4 = Encuesta::all($columns=['pregunta4']);
        // dd(count($recuperado4));
        $arreglo = [];
        for ($i=0; $i < count($recuperado4) ; $i++) { 
            array_push($arreglo, json_decode(json_decode($recuperado4[$i])->pregunta4) );
        }
        // dump(json_decode(json_decode($arreglo[0])->pregunta4)->poblado_cercano );
        dump($arreglo[0]);
        return view('gad.ponderacion')->with('rec',$recuperado4);
    }
    
    // public function resultados(){
    //     // Encuesta::all($columns=['pregunta4','pregunta5','pregunta6','pregunta7']);
    //     // sec4 pre2 vias de acceso 1,5
    //     $recuperado4 = Encuesta::all($columns=['pregunta4']);
    //     // es una lista
    //     dump($recuperado4);
    //     return view('gad.ponderacion')->with('rec',json_decode($recuperado4) );
    // }
}
