<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['type_id','fun_id','prod_nome','prod_patrimonio','prod_serie','prod_marca','prod_modelo','prod_status','prod_garantia'];

    public function typeprods()
    {
      return $this->belongsTo('App\Typeprod','type_id');
    }
    public function funcionarios()
    {
      return $this->belongsTo('App\Funcionario','fun_id');
    }
    

}
