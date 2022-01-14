<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Provincia;
use Illuminate\Http\Request;

class VisualizadorController extends Controller
{
    public function index() {
        $respuesta1 = Encuesta::all($columns =['pregunta1']);
        // dump($respuesta1);
        //  return view('visualizador'); 
        return view('visualizador',compact('respuesta1')); 

    }
  
    
}
