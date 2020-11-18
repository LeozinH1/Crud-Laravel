<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuariosRequest extends FormRequest
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
            'nome' => 'required',
            'cidade' => 'required',
            'telefone' => 'required'
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'O campo nome não pode ser vazio.',
            'cidade.required' => 'O campo cidade não pode ser vazio.',
            'telefone.required' => 'O campo telefone não pode ser vazio.'
        ];
    }
}
