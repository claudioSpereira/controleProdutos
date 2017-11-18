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
            'fun_matricula' => 'required',
            'fun_cargo' => 'required',
            'fun_setor' => 'required'
        ];
    }
    public function messege()
    {
        return [

            'fun_nome.max' => 'nome maximo 25 caracter',
            'fun_matricula.required' => 'É necessário o nome chupa-chupa',
            'fun_cargo.required' => 'É necessário o nome chupa-chupa',
            'fun_setor.required' => 'É necessário o nome chupa-chupa'
        ];
    }
}
