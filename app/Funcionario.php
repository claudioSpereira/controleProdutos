<?php

  namespace App;

  use Illuminate\Database\Eloquent\Model;

  class Funcionario extends Model
  {
    protected $fillable = ['fun_nome','fun_matricula','fun_cargo','fun_setor'];


      public function produtos()
     {
     return $this->hasMany('App\Produto');
     }

  }
