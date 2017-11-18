<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typeprod extends Model
{
    protected $fillable = ['type_nome','type_qntd','teste'];

    public function produtos()
    {
      return $this->hasMany('App\Produto');
    }
}
