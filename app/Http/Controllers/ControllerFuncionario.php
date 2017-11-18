<?php

namespace App\Http\Controllers;
use Validator;

use App\Http\Requests\FuncionarioRequest;
use Illuminate\Http\Request;
use App\Funcionario;
use App\Mover;
use Input;
class ControllerFuncionario extends Controller
{
  /*public function listafuncionario()
  {
    $col = Colaborador::all();
    return view('funcionarios.listafuncionario', ['col'=>$col]);
  }*/
  public function listafuncionario()
  {
    $col = Funcionario::all();
    return view('funcionarios.listaFuncionario', ['col'=>$col]);
  }

  public function criafuncionario()
  {
    //$funcionario =  Funcionario::all();
    
    return view('funcionarios.criaFuncionario');
  }
  public function salvafuncionario(FuncionarioRequest $post)
  {
    $validator = Validator::make($post->all(), [
            'fun_matricula' => 'required|unique:funcionarios',
            ]);
            $messages = [
                'fun_matricula.unique' => 'We need to know your e-mail address!',
            ];

            if ($validator->fails()) {
            return redirect('/criafuncionario')
                        ->withErrors($validator)
                        ->withInput();
        }else{

    $post = new Funcionario;
    $post->fun_nome = strtoupper(Input::get('fun_nome'));
    $post->fun_matricula = strtoupper(Input::get('fun_matricula'));
    $post->fun_cargo = strtoupper(Input::get('fun_cargo'));
    $post->fun_setor = strtoupper(Input::get('fun_setor'));
    $post->save();

    return redirect('/listafuncionario');
    }
  }
  public function editafuncionario($id)
  {
    $col = Funcionario::find($id);
    return view('funcionarios.editaFuncionario', ['col'=>$col]);
  }
  public function atualizafuncionario(FuncionarioRequest $request, $id)
  {
    $col = Funcionario::find($id)->update($request->all());
    return redirect('/listafuncionario');
  }
}
