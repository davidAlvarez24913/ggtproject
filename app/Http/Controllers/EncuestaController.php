<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Cantone;
use App\Models\Encuesta;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use App\Models\Provincia;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Js;
use Nette\Utils\Json;

class EncuestaController extends Controller
{
    
    public function home(){
        
        return view('encuesta.home');
    }

    public function accesibilidad(){
        
        return view('encuesta.accesibilidad');
    }

    public function seccion1_2(){
        

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
    public function guardar( Request $request){  
        
        return view('encuesta.guardar');
    }
    
    public function ayuda(Request $request){
        // no utilizo esto
        $sec1_2=  $request->data;
        if(isset($data)){
            
            return response()->json([
                'lista'=> $sec1_2,
                'success' => true
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
    }
    
    public function retrieve_1_2(Request $request){

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
        // $res3 = session()->get('pregunta3');
       
        // $pregunta1 =[
        //     "nombre" =>$request->nombre,
        //     "categoria" =>$request->categoria,
        //     "tipo" => $request->tipo,
        //     "subtipo" => $request->subtipo,
        //     "provincia" => $request->provincia,
        //     "canton" => $request->canton,
        //     "parroquia" => $request->parroquia,
            
        //     ];
        // $encuesta->pregunta1 = $pregunta1['nombre'];
        // $encuesta->id_usuario = Auth::user()->id;
        // $encuesta->pregunta2 = "id_provincia:".(string)$pregunta1['provincia']. 
        //                         'id_canton:'.(string)$pregunta1['canton'].
        //                         'id_parroquia:'.(string)$pregunta1['parroquia'] ;
        // $encuesta->pregunta3 = 'nombre_institucion'.$request->nombre_institucion;
        // $encuesta->save();
        // return redirect()->route('encuesta.seccion3');
        dd(json_decode(session()->get('prueba3'), true));
        // dd($request->all());

    }
    
}
// https://www.youtube.com/watch?v=lckWgdguzeE&list=WL&index=1&t=332s&ab_channel=Codea
// Select dependientes de tres niveles en Laravel con la API Fetch JS