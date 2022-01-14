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

    public function accesibilidad(){
        
        return view('encuesta.accesibilidad');
    }

    public function seccion1_2(){
        // $respuesta1 = Encuesta::all($columns =['pregunta1']);
        

        $provincias =  Provincia::all();
        // return $provincias ;
        // $cantones = Cantone::where('id_provincia',11)->get();
        // en la linea 21 utilce esa consulta par que me retorene un dato quemado , y al hacer esto me di cuenta 
        // que al crear el model en singular y se deduce el plural del ingles la consulta era erroena por eso renombre al model Cantone
        // return view('encuesta.seccion1_2',compact('provincias','cantones'));
        // y retorne esta variable para ver que ocurria

        // $parroquias = Parroquia::where('id_canton',109)->get();
        // return $parroquias;
        // dump(gettype($provincias));
        // dump($provincias);
        return view('encuesta.seccion1_2',compact('provincias')); 
        // return view('encuesta.seccion1_2',compact('provincias','respuesta1')); 

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
    public function seccion4(){
        
        return view('encuesta.seccion4');
    }
    public function seccion5(){
        
        return view('encuesta.seccion5');
    }
    
    public function seccion6(){
        
        return view('encuesta.seccion6');
    }
    
    public function seccion7(){
        
        return view('encuesta.seccion7');
    }
    public function guardar(){  
        
        return view('encuesta.guardar');
    }
    
    
    
    public function retrieve_1_2(Request $request){
    // public function retrieve_1_2(Retrieve_1_2Encuesta $request){
    // formdata me genera un error no pasa los datos al sig vista
            
        $request->validate(["email" => 'required|email',]);
        $data = json_encode( $request->except(['_token']) );
        return view('encuesta.seccion3',compact('data'));

    }
    
    
    public function retrieve_3(Request $request){ // original sin $id
        $data3 = json_encode($request->except(['_token','data']) );
        // return view('encuesta.seccion4',compact('data3'));
        return view('encuesta.seccion4')->with('data3',$data3);

    }
    
    public function retrieve_4(Request $request){
        $data_4 = json_encode( $request->except(['_token']) );
        // dump($request->all());
        return view('encuesta.seccion5')->with('data_4',$data_4);
    }


    public function retrieve_5(Request $request){
        $data_5 = json_encode( $request->except(['_token']) );
        return view('encuesta.seccion6',compact('data_5'));

    }
    public function retrieve_6(Request $request){
        $data_6 = json_encode( $request->except(['_token']) );
        return view('encuesta.seccion7',compact('data_6'));

    }
    public function retrieve_7(Request $request){
        $data_7 = json_encode( $request->except(['_token']) );
        return view('encuesta.guardar',compact('data_7'));

    }


    public function store(Encuesta $encuesta,Request $request){

        $encuesta->pregunta1 = $request->data1__;
        $encuesta->id_usuario = Auth::user()->id;
        $encuesta->pregunta3 = $request->data3__;
        $encuesta->pregunta4 = $request->data4__;
        $encuesta->pregunta5 = $request->data5__;
        $encuesta->pregunta6 = $request->data6__;
        $encuesta->pregunta7 = $request->data7__;
        $encuesta->save();
        $respuesta = 'ok';
        return view('encuesta.guardar',compact('respuesta'));
    }
    
}
// https://www.youtube.com/watch?v=lckWgdguzeE&list=WL&index=1&t=332s&ab_channel=Codea
// Select dependientes de tres niveles en Laravel con la API Fetch JS