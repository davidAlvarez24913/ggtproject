<?php

namespace App\Http\Controllers;

use App\Models\Encuesta;
use App\Models\Provincia;
use App\Models\Result;
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
        // $max_id = max(array_values(json_decode(Encuesta::all(['id']),true)));
        // dump($max_id['id']);

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
                // dd($name_user);  
                array_push($aux, $name_user->name ,$aux_json->nombre,$aux_json->categoria , $name_prov[0]->provincia, substr($e->created_at,0,10) ,$e->id);
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

            return view('gad.fichasRegistradas')->with('arreglo',$arr_mostrar) ;
        }
        
    }


    
    public function eliminar(Request $request){
        $id = (int)$request->id_eliminar;
        // var_dump($id);
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

    public function ponderacion(){   
        $ponderaciones = Result::all(['id_encuesta','ponderacion4' ,'ponderacion5' ,'ponderacion6' ,'ponderacion7']);
            // dump( json_decode($ponderaciones, true ));
                
        return view('gad.ponderacion',compact('ponderaciones'));
    }

    
}
