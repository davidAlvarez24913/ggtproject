<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Cantone;
use App\Models\Encuesta;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use App\Models\Provincia;

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
}
// https://www.youtube.com/watch?v=lckWgdguzeE&list=WL&index=1&t=332s&ab_channel=Codea