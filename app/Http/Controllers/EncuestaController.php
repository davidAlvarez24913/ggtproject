<?php

namespace App\Http\Controllers;

use App\Models\Canton;
use App\Models\Cantone;
use App\Models\Encuesta;
use App\Models\Parroquia;
use Illuminate\Http\Request;
use App\Models\Provincia;
use App\Models\Result;
use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EncuestaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('normal',['only'=>['index'] ]);
        
    }

    public function index(){
        
        // return view('encuesta.home');
    }

    public function home(){
        
        return view('encuesta.home');
    }
    public function perfil(){
        
        return view('encuesta.configUser');
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
        $data_aux =  array_filter( $request->except(['_token']) );
        $data = json_encode(array_filter($data_aux, function($k){ return $k != 'false';})) ;
        return view('encuesta.seccion3',compact('data'));

    }
    
    
    public function retrieve_3(Request $request){ // original sin $id
        // $data3 = json_encode($request->except(['_token','data']) );
        $data_aux =  array_filter( $request->except(['_token']) );
        $data3 =  json_encode(array_filter($data_aux, function($k){ return $k != 'false';})) ;
        // dump($data3);
        // return view('encuesta.seccion4',compact('data3'));
        return view('encuesta.seccion4')->with('data3',$data3);

    }
    
    public function retrieve_4(Request $request){

        $data_aux =  array_filter( $request->except(['_token']) );
        $data_4 = json_encode(array_filter($data_aux, function($k){ return $k != 'false';})) ;
        // $data_4 = json_encode( $request->except(['_token']) );
        // dump($request->all());
        return view('encuesta.seccion5')->with('data_4',$data_4);
    }


    public function retrieve_5(Request $request){
        $data_aux =  array_filter( $request->except(['_token']) );
        $data_5 = json_encode(array_filter($data_aux, function($k){ return $k != 'false';})) ;
        // $data_5 = json_encode( $request->except(['_token']) );
        return view('encuesta.seccion6',compact('data_5'));

    }
    public function retrieve_6(Request $request){
        $data_aux =  array_filter( $request->except(['_token']) );
        $data_6 = json_encode(array_filter($data_aux, function($k){ return $k != 'false';})) ;

        // $data_6 = json_encode( $request->except(['_token']) );
        return view('encuesta.seccion7',compact('data_6'));

    }
    public function retrieve_7(Request $request){
        $data_aux =  array_filter( $request->except(['_token']) );
        // dump($data_aux);
        $data_7 = json_encode(array_filter($data_aux, function($k){ return $k != 'false';})) ;
        // $data_7 = json_encode( $request->except(['_token']) );
        return view('encuesta.guardar',compact('data_7'));

    }


    public function store(Encuesta $encuesta,Request $request){
        
        if(isset($request->id_to_edit)){
            $id_encuesta = $request->id_to_edit;
            $p1 = $request->data1__;
            $p3 = $request->data3__;
            $p4 = $request->data4__;
            $p5 = $request->data5__;
            $p6 = $request->data6__;
            $p7 = $request->data7__;
            // update
            // dump($id_encuesta);
            $query_update = DB::update('update encuestas set pregunta1 = ?,
                pregunta3 = ?, pregunta4 = ?, pregunta5 = ?, pregunta6 = ?, pregunta7 = ? 
                where id = ?', [$p1, $p3, $p4, $p5, $p6, $p7,$id_encuesta]);

           
            $aux = array( "id"=>$id_encuesta , "pregunta4"=>$p4, "pregunta5"=>$p5, "pregunta6"=>$p6, "pregunta7"=> $p7);

            $aux2 = jerarquizarPonderizar($aux);
            // dump('valor funcion jerarquizar');
            // dump($aux);
            // $arrx_update_p = jerarquizarPonderizar($aux);
            // dd($aux2);

            $actualizar_p = DB::update('update resultados set  ponderacion4 = ?, ponderacion5 = ?, ponderacion6 = ?, ponderacion7 = ? 
                where id_encuesta = ?',[$aux2[1], $aux2[2], $aux2[3], $aux2[4], (int) $aux2[0]]);

            // return [$actualizar_p, $aux2];
            return redirect()->route('visualizador');

        }else{
            $encuesta->id_usuario = Auth::user()->id;
            $encuesta->pregunta1 = $request->data1__;
            $encuesta->pregunta3 = $request->data3__;
            $encuesta->pregunta4 = $request->data4__;
            $encuesta->pregunta5 = $request->data5__;
            $encuesta->pregunta6 = $request->data6__;
            $encuesta->pregunta7 = $request->data7__;
            $encuesta->save();
            

            // saludar();
            // dd(var_dump(json_decode($encuesta,true)['pregunta4']));
            // $recuperado = json_decode($encuesta,true);
            $aux_ponderacion_arr =  jerarquizarPonderizar($encuesta);   
            
            $resultadoc = new Result();
            $resultadoc->id_encuesta = $aux_ponderacion_arr[0];
            $resultadoc->ponderacion4 = $aux_ponderacion_arr[1];
            $resultadoc->ponderacion5 = $aux_ponderacion_arr[2]; 
            $resultadoc->ponderacion6 = $aux_ponderacion_arr[3];
            $resultadoc->ponderacion7 = $aux_ponderacion_arr[4];
            $resultadoc->save();

            return redirect()->route('visualizador');

        }
        
        // $respuesta = 'ok';
        // redirigir al visualizador geografico
        // al devolver ok , pedir confirmacion y desactivar boton
        // return view('encuesta.guardar',compact('respuesta'));
    }
    
}
// https://www.youtube.com/watch?v=lckWgdguzeE&list=WL&index=1&t=332s&ab_channel=Codea
// Select dependientes de tres niveles en Laravel con la API Fetch JS