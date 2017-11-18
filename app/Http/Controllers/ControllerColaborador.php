<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ColaboradorRequest;
use App\Funcionario;
use App\Mover;
use App\Produto;
use DB;
use Input;
class ControllerColaborador extends Controller
{
  public function listacolaborador()
  {
    $col = Funcionario::all();
    return view('colaboradores.listaColaborador', ['col'=>$col]);
  }

  public function criacolaborador()
  {
    $produtos =  Produto::all()->pluck('prod_nome','id');
    return view('colaboradores.criaColaborador',['produtos'=>$produtos]);
  }
  public function salvacolaborador(ColaboradorRequest $post)
  {
    $post = new Colaborador;
    $post->col_id = strtoupper(Input::get('col_id'));
    $post->col_nome = strtoupper(Input::get('col_nome'));
    $post->col_matricula = strtoupper(Input::get('col_matricula'));
    $post->col_cargo = strtoupper(Input::get('col_cargo'));
    $post->col_setor = strtoupper(Input::get('col_setor'));
    $post->save();

    $post = new Mover;
    $post->col_id = strtoupper(Input::get('col_id'));
    $post->col_nome = strtoupper(Input::get('col_nome'));
    $post->col_matricula = strtoupper(Input::get('col_matricula'));
    $post->save();

    return redirect('/listacolaborador');
  }
  public function listamove()
  {
    // join entre tabelas
    $move = DB::table('colaboradors')
                     ->join('produtos', 'produtos.id', '=', 'colaboradors.col_id')
                     ->select('colaboradors.*', 'produtos.prod_nome as prod_nome')
                     ->get();
    return view('colaboradores.listaMove', ['move' => $move]);
  }


}
