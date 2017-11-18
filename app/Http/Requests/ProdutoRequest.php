<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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

           'type_id' => 'required',
           'fun_id'=> 'required',
           'prod_nome' => 'required|max:13',
           'prod_patrimonio' => 'required|numeric',
           'prod_serie' => 'required|numeric',
           'prod_marca' => 'required|max:15',
           'prod_modelo' => 'required|max:25',
           'prod_status' => 'required',
           'prod_garantia' => 'required'
         ];
     }
     public function messages(){
     return [
       'type_id.required' => 'Tipo de Produto Vazio',
       'fun_id.required' => 'Funcionario Vazio',
       'prod_nome.min' => 'Mini 13',
       'prod_patrimonio.numeric' => 'apenas numeros',
       'prod_serie.numeric' => 'apenas numeros',
       'prod_marca.max' => 'Maximo 15',
       'prod_modelo.max' => 'Maximo 25',
       'prod_status.required' => 'digite',
       'prod_garantia.required' => 'digite',
       'file.required' => 'digite'
       ];
     }
}
