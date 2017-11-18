<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuncionarioRequest extends FormRequest
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

           'fun_nome' => 'required|max:25',
           'fun_matricula' => 'required|numeric',
           'fun_cargo' => 'required',
           'fun_setor' => 'required|max:15'
         ];
     }
     public function messages(){
     return [

       'fun_nome.max' => 'Nome maximo permitido 25 caracteres',
       'fun_matricula.numeric' => 'Digite apenas numeros',
       'fun_matricula.unique' => 'Essa Matricula já existe',
       'fun_cargo.required' => 'Digite seu cargo',
       'fun_setor.max' => 'Maximo 15'

       ];
     }
}
