<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Provincia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules\Dimensions;

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

    public function verFichas()
    {
        if(Auth::user()->rol == 'admin'){
            $enc_admin = Encuesta::all($columns = ['id_usuario','pregunta1','created_at','id']);
            $arr_mostrar_admin =[];
            foreach($enc_admin as $e){
                $aux =[];
                $aux_json= json_decode($e->pregunta1);
                $name_prov = DB::table('provincias')
                            ->select('provincia')
                            ->where('id','=',$aux_json->provincia)
                            ->get();
                $name_user = User::find($e->id_usuario);
                array_push($aux,$name_user->name ,$aux_json->nombre,$aux_json->categoria , $name_prov[0]->provincia, substr($e->created_at,0,10) ,$e->id);
                array_push($arr_mostrar_admin,$aux);

            }
            // dump($arr_mostrar_admin);
            return view('gad.fichasRegistradas')->with('arreglo',$arr_mostrar_admin);
        }else{
            $encuestas =  DB::table('encuestas')
                        ->select('id','pregunta1','created_at')
                        ->where('id_usuario','=',Auth::user()->id)
                        ->get();
        
        
            $arr_mostrar =[];
            foreach($encuestas as $e){
                $aux =[];
                $aux_json= json_decode($e->pregunta1);
                $name_prov = DB::table('provincias')
                            ->select('provincia')
                            ->where('id','=',$aux_json->provincia)
                            ->get();
                array_push($aux,Auth::user()->name ,$aux_json->nombre,$aux_json->categoria , $name_prov[0]->provincia, substr($e->created_at,0,10) ,$e->id);
                array_push($arr_mostrar,$aux);
            }
            // dump($arr_mostrar);
            return view('gad.fichasRegistradas')->with('arreglo',$arr_mostrar);
        }
        
    }


    
    public function eliminar(Request $request){
        $id = (int)$request->id_eliminar;
        var_dump($id);
        $result = DB::delete('delete from encuestas where id = ?', [$id]);
        // dump($result);
        // return view('gad.fichasRegistradas');
        return  redirect()->route('gad.fichasRegistradas')->with('result',$result);
    }


    public function editar(Request $request){
        $provincias =  Provincia::all();
        $id = (int)$request->id_editar;
        // $same_data_to_edit = Encuesta::find($id);
        $data_to_edit = DB::table('encuestas')
                            ->select('id','pregunta1','pregunta3','pregunta4','pregunta5','pregunta6','pregunta7')
                            ->where('id','=',$id)
                            ->get();
        // dd($id);
        // dump($same_data_to_edit); //devuelve dato como collection of Model
        // dump($data_to_edit);
        // return redirect()->route('encuesta.seccion1_2',compact('data_to_edit'));
        // return redirect()->route('encuesta.seccion1_2',compact('same_data_to_edit'));

        return view('encuesta.seccion1_2',compact('data_to_edit','provincias'));
    }   

    public function validacion()
    {
        return view('gad.validacion');
    }
    public function ponderacion()
    {   
        
        $recuperado4 = Encuesta::all($columns=['pregunta4']);
        $long = count($recuperado4) -1; //longitud

        $arreglo = [];// este arreglo recupera como arreglo para acceder a los atributos o claves del arreglo
        for ($i=0; $i < count($recuperado4)-1; $i++) { 
            array_push($arreglo, json_decode(json_decode($recuperado4[$i])->pregunta4, true) );
            // para tratarlo como arreglo segundo parametro true

        }
        function check_answer($pregunta, $datos_bd){
            $datos_bd = array_filter($datos_bd);
            $datos_bd = array_filter($datos_bd,function($k) {return $k != 'false'; } ) ;
            $flag = false;
            foreach(array_keys($datos_bd) as $a){
                
                if(in_array($a,$pregunta)){
                    $flag = $flag || true ;
                }else{
                    $flag = $flag || false ;
                }
            }
            return $flag;
        }
        
        $aux = $arreglo[$long-1]; //ultimo registro
        
        $pregunta4_1 =['poblado_cercano','distancia_km','tiempo_en_auto'];

        $pregunta4_2 =['terrestre', 'coordenada_inicio', 'coordenada_fin', 'distancia', 'tipo_material', 'acuatico', 'puerto_muelle_partida', 
        'puerto_muelle_llegada', 'observaciones_acuatico', 'aereo', 'nacional', 'Internacional', 'observaciones_aereo',
        'tipo_via', 'select_estado_4_2', 'subtipo_acuatico', 'estado_puerto_partida', 'estado_puerto_llegada'];
        
        $pregunta4_3 = ['bus', 'buseta', 'tranporte_4x4', 'taxi', 'mototaxi', 'teleferico', 'barco', 'lancha','bote', 'canoa', 'avion', 'avioneta', 'helicoptero', 'otro'];
        $pregunta4_3_1 = ['name_coop','estacion','diaria', 'semanal', 'mensual', 'eventual', 'detalle'];
        $pregunta4_4 = ['general', 'discapacidad_fisica', 'discapacidad_visual', 'discapacidad_auditiva', 'intelectual_psicosocial', 'no_accesible'];
        $pregunta4_5 = ['estado_4-5', 'estado_4-5', 'estado_4-5'];
        $p4 = array();
        array_push($p4, $pregunta4_1,$pregunta4_2 ,$pregunta4_3 ,$pregunta4_3_1 ,$pregunta4_4 ,$pregunta4_5);

        $respuestas4 = array();
        foreach($p4 as $p){
            array_push($respuestas4, check_answer($p,$aux));

        }
        return view('gad.ponderacion')->with('rec',$recuperado4);
    }

    
}
