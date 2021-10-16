<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateContact extends FormRequest
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
            'name' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'body' => 'required|string',
            'legal' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo nombre es requerido',
            'lastName.required' => 'El campo Apellidos es requerido',
            'email.required' => 'El campo Email es requerido',
            'subject.required' => 'El campo Asunto es requerido',
            'body.required' => 'El campo Mensaje es requerido',
            'legal.required' => 'Debe aceptar las políticas de privacidad',
        ];
    }
}
