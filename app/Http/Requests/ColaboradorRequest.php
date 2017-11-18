<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ColaboradorRequest extends FormRequest
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
            'col_id' => 'required',
            'col_nome' => 'required|min:5',
            'col_matricula' => 'required',
            'col_cargo' => 'required',
            'col_setor' => 'required'
        ];
    }
    public function messege()
    {
        return [
            'col_id.required' => 'É necessário o nome chupa-chupa',
            'col_nome.required' => 'É necessário o nome chupa-chupa',
            'col_matricula.required' => 'É necessário o nome chupa-chupa',
            'col_cargo.required' => 'É necessário o nome chupa-chupa',
            'col_setor.required' => 'É necessário o nome chupa-chupa',
        ];
    }
}
