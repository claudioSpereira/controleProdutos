<?php

namespace App\Http\Controllers;
use App\Motivos;
use Input;
use Illuminate\Http\Request;
use DB;

class ControllerMv extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function criamv()
  {
    return view('chamados.criaMotivo');
  }
  public function salvamv()
  {
    $mv = new Motivos;
    $mv->mv_nome = strtoupper(Input::get('mv_nome'));
    $mv->mv_qntd = strtoupper(Input::get('mv_qntd'));
    $mv->mv_atendimento = strtoupper(Input::get('mv_atendimento'));
    $mv->save();
    return redirect('/listaproduto');
  }
  public function listasoma()
  {
    $result =  DB::table('motivos')
                     ->select(DB::raw('sum(mv_qntd) as qntd'))
                     ->where('mv_nome', '=', 'DANO CABO HDMI/VGA')
                     ->get();
                  return view('chamados.listaSoma', ['result' => $result]);
  }

  public function author()
  {
    return view('author.author');
  }
  public function load()
  {
    return view('load');
  }
}
