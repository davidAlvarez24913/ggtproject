<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Cantone;
use App\Models\Encuesta;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use App\Models\Provincia;
use Illuminate\Support\Facades\Auth;

class EncuestaController extends Controller
{
    
    public function home(){
        
        return view('encuesta.home');
    }
    public function seccion1_2(){
        

        $provincias =  Provincia::all();
        // return $provincias;
        // $cantones = Cantone::where('id_provincia',11)->get();
        // en la linea 21 utilce esa consulta par que me retorene un dato quemado , y al hacer esto me di cuenta 
        // que al crear el model en singular y se deduce el plural del ingles la consulta era erroena por eso renombre al model Cantone
        // return view('encuesta.seccion1_2',compact('provincias','cantones'));
        // y retorne esta variable para ver que ocurria

        // $parroquias = Parroquia::where('id_canton',109)->get();
        // return $parroquias;
        return view('encuesta.seccion1_2',compact('provincias')); 
    }
    
    public function cantones(Request $request){
        // return $request->texto;
        if(isset($request->id)){

            $cantones = Cantone::where('id_provincia',$request->id)->get();
            
            return response()->json([
                'lista'=> $cantones,
                'success' => true
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
        
        
    }


    public function parroquias(Request $request){
        if(isset($request->id)){
            $parroquias = Parroquia::where('id_canton',$request->id)->get();
            return response()->json([
                'lista'=> $parroquias,
                'success' => true
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
    }
    
    public function seccion3(){
        
        return view('encuesta.seccion3');
    }
    public function store(Request $request, Encuesta $encuesta){
        // esta funcion esta totalmente mal hecha por que debe recojer los datos de 7 vistas

        // validacion
        $request->validate(['nombre' => 'required']);
        
        $encuesta->pregunta1 = $request->nombre;
        $encuesta->id_usuario = Auth::user()->id;
        // $encuesta->pregunta2 = strval($request->provincia). 
        //                         strval($request->canton) .
        //                         strval($request->parroquia) ;
        $encuesta->pregunta2 = 'loja'.'saraguro'.'xxx';
        $encuesta->pregunta3 = 'prueba';
        $encuesta->save();
        return redirect()->route('encuesta.seccion3');
        // musica chingona
        // https://www.youtube.com/watch?v=QYU18mrBB54&list=RDLUwWxWDaFj8&index=16&ab_channel=JABBAWOCKEEZOFFICIAL
    }
}
// https://www.youtube.com/watch?v=lckWgdguzeE&list=WL&index=1&t=332s&ab_channel=Codea