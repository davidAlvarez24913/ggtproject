<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use Illuminate\Http\Request;

class GadController extends Controller
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

    public function perfil(){
        
        return view('gad.configUser');
    }


    public function validacion()
    {
        return view('gad.validacion');
    }
    public function ponderacion()
    {
        // aqui voy a mostrar los resultados
        $recuperado4 = Encuesta::all($columns=['pregunta4']);
        $long = count($recuperado4) -1; //longuitud
        $arreglo = [];// este arreglo recupera como arreglo para acceder a los atributos o claves del arreglo
        for ($i=0; $i < count($recuperado4)-1; $i++) { 
            array_push($arreglo, json_decode(json_decode($recuperado4[$i])->pregunta4) );
        }
        
        dump($long);
        dump($arreglo);
        $aux = $arreglo[$long-1]; //ultimo registro
        // $aux = $arreglo[0]; //ultimo registro

        // pregunta 4.2  literal A terrestre
        if($aux->terrestre != true || $aux->coordenada_inicio != null || $aux->coordenada_fin != null || $aux->distancia != null || $aux->tipo_material != null ){
        // if($aux->terrestre != false || $aux->coordenada_inicio != null ){
            dump('valor 1.5');
        }

        // pregunta 4.2  literal B Acuatico
        // $aux->acuatico != true || 
        if($aux->subtipo_acuatico != null || $aux->puerto_muelle_partida != null || $aux->puerto_muelle_llegada != null || $aux->estado_puerto_llegada != null || $aux->observaciones_acuatico != null ){
            // if($aux->terrestre != false || $aux->coordenada_inicio != null ){
                dump('valor b: 1.5');
            }


        return view('gad.ponderacion')->with('rec',$recuperado4);
    }






    // logica es evaluar cada pregunta y recuperar puntuacion acumular puntaje
    // guardarlo en BD
    // Mostroarlo en un DataTable
    
}
