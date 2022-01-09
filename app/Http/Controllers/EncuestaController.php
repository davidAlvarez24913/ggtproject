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
        
        return view('encuesta.guardarDatos1');
    }
    
    
    // musica chingona
    // https://www.youtube.com/watch?v=QYU18mrBB54&list=RDLUwWxWDaFj8&index=16&ab_channel=JABBAWOCKEEZOFFICIAL

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

    public function retrieve_1_2(Request $request){
        $data_1_2 = [
            "nombre" =>$request->nombre,
            "categoria" =>$request->categoria,
            "tipo" => $request->tipo,
            "subtipo" => $request->subtipo,
            "provincia" => $request->provincia,
            "canton" => $request->canton,
            "parroquia" => $request->parroquia,
            "barrio" => $request->barrio,
            "c_principal" => $request->c_principal,
            "numero" => $request->numero,
            "transversal" => $request->transversal,
            "latitud" => $request->latitud,
            "longitud"  => $request->longitud,
            "altura" => $request->altura,
            "administrador" => $request->administrador,
            "nombre_admin" => $request->nombre_admin,
            "nombre_institucion"=> $request->nombre_institucion,
            "cargo" => $request->cargo,
            "email" => $request->email,
            "celular" => $request->celular,
            "observaciones" => $request->observaciones,

            ];
            $data = json_encode($data_1_2);
            // dd($data);
            // return $data;
            session(['data'=>'data']);
            // dd(session()->get('data'));
            // return view('encuesta.seccion1_2');


            $request->session()->flash('data', $data);
            // return view('encuesta.seccion1_2');
            
            
            return view('encuesta.seccion1_2',compact('data'));


            // return redirect()->action([EncuestaController::class,'store'],['data1_2' => $data]);
            // se puede hacer mediante localStorage
            // Se puede hacer mediante cookies
            // Se puede hacer mediante sesiones
    }
    public function retrieve_3(Request $request){ // original sin $id
        $data_3 = [
            "carac_clima"=> $request -> carac_clima,
           "clima" => $request->clima,
           "temperatura" => $request ->temperatura ,
           "precipitacion" => $request ->precipitacion ,
           "linea_producto" => $request ->linea_producto ,
           "cultura" => $request ->cultura ,
           "naturaleza" => $request ->naturaleza ,
           "aventura" => $request ->aventura ,
           "escenario_entidad" => $request ->escenario_entidad ,
           "pristino" => $request ->pristino ,
           "rustico" => $request ->rustico ,
           "rural" => $request ->rural ,
           "urbano" => $request ->urbano ,
           "primitivo" => $request -> primitivo,
           "ingreso_atractivo" => $request -> ingreso_atractivo,
           "tipo_ingreso" => $request -> tipo_ingreso,
           "ingreso" => $request -> ingreso,
           "salida" => $request -> salida,
           "todos_los_dias" => $request ->todos_los_dias ,
           "fin_de_semana" => $request ->fin_de_semana ,
           "dias_habiles" => $request ->dias_habiles , 
           "reservas" => $request -> reservas, 
           "minimo" => $request -> minimo, 
           "maximo" => $request ->maximo , 
           "formas_pago"=> $request-> formas_pago,
           "efectivo"=> $request-> efectivo,
           "dinero_electronico"=> $request-> dinero_electronico,
           "tarjeta_debito"=> $request->tarjeta_debito ,
           "tarjeta_credito"=> $request-> tarjeta_credito,
           "transferencia_bancaria"=> $request->transferencia_bancaria ,
           "cheque"=> $request->cheque ,
           "deposito_bancario"=> $request->deposito_bancario ,
           "meses"=> $request-> meses,
           "observaciones"=> $request-> observaciones,
        ];
        // opcion correcta
        // $data3 = json_encode($data_3,JSON_HEX_QUOT);
        $data3 = Js::from($data_3);
        // return response()->view('encuesta.seccion4',$data_3, 200);
        return view('encuesta.seccion4',compact('data3'));
    }




    
    public function retrieve_4(Request $request){
        $data_4 = json_encode($request->all());
        return view('encuesta.seccion5',compact('data_4'));
    }


    public function retrieve_5(Request $request){

        $data_5 = json_encode($request->all());
        // recuperar todos los datos seccion

        if(isset($data_5)){
            
            return response()->json([
                'respuestas5'=> $data_5,
                'success' => true
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
        
    }
    
}
// https://www.youtube.com/watch?v=lckWgdguzeE&list=WL&index=1&t=332s&ab_channel=Codea
// Select dependientes de tres niveles en Laravel con la API Fetch JS