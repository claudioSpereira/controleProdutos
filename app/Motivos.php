<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motivos extends Model
{
  protected $fillable = ['ch_nome','ch_qntd','ch_atendimento'];


    public function chamadosqntdds()
   {
   return $this->hasMany('App\Chamadosqntdds');
   }
}
