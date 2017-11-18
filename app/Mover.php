<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mover extends Model
{
  protected $fillable = ['funcionario','produto','patrimonio'];

  public function produtos()
  {
    return $this->hasMany('App\Produto');
  }
}
