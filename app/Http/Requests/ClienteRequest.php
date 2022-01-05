<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'apellido' => 'required|string',
            'cedula' => 'required|numeric',
            'departamento_id' => 'required',
            'ciudad_id' => 'required',
            'celular' => 'required|numeric',
            'email' => 'required|email|unique:clientes|string',
            'habeas_data' => 'required',
        ];
    }
}
