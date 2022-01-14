<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Retrieve_1_2Encuesta extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // false cuando no tenga permisos
        // true cuando deba verificar credenciales
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // return [
        //     'administrador'=> 'required',
        //     "nombre" => 'required',
        //     "categoria" => 'required',
        //     "tipo" => 'required',
        //     "subtipo" => 'required',
        //     "provincia"=> 'required',
        //     "canton" => 'required',
        //     "parroquia"=> 'required',
        //     "barrio" => 'required',
        //     "c_principal" => 'required',
        //     "numero"=> 'required',
        //     "transversal"=> 'required',
        //     "latitud"=> 'required',
        //     "longitud"  => 'required',
        //     "administrador"=> 'required',
        //     "nombre_admin" => 'required',
        //     "nombre_institucion"=> 'required',
        //     "cargo" => 'required',
        //     "email" => 'required|email',
        //     "celular" => 'required',
        // ];
    }
}
// https://www.youtube.com/watch?v=Ze-Sg2BT3mc&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=16&ab_channel=CodersFree