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
        return [
            //
        ];
    }
}
// https://www.youtube.com/watch?v=Ze-Sg2BT3mc&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF&index=16&ab_channel=CodersFree