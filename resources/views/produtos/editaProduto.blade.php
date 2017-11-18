@extends('app')

@section('content')



 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif
 @if(Session::has('altera'))
     <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('altera') !!}</em></div>
 @endif

 

 <h2>ATENÇÃO, VERIFIQUE TODOS OS CAMPOS ANTES DE SALVAR!</h2>
 {!! Form::open(['url'=>"/$produtos->id/updateproduto",'method'=>'put', 'files'=>'true','id'=>'delForm']) !!}
 <!-- Nome Form Input -->

 <div class="form-group">
 {!! Form::label('type_id','Produto:', ['class'=>'col-xs-1']) !!}
 {!! Form::select('type_id', $types, null, array('class'=>'form-control btn-info')) !!}
 </div>

 <div class="form-group">
 {!! Form::label('fun_id','Funcionario', ['class'=>'col-xs-1']) !!}
 {!! Form::select('fun_id', $funcionarios, null ,array('class'=>'form-control btn-info')) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_nome', 'Nome:', ['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_nome', $produtos->prod_nome,['class'=>'form-control btn-info']) !!}
 </div>

 <!-- Descricao Form Input -->
 <div class="form-group">
 {!! Form::label('prod_patrimonio', 'Patrimonio:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_patrimonio', $produtos->prod_patrimonio,['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_serie', 'Serie:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_serie', $produtos->prod_serie,['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_marca', 'Marca:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_marca', $produtos->prod_marca,['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_modelo', 'Modelo:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_modelo', $produtos->prod_modelo,['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
   {!! Form::label('prod_status', 'Status:',['class'=>'col-xs-1']) !!}
   {!! Form::select('prod_status', ['== Please select == ' => ['Ativado' => 'Ativado', 'Desativado por Dano Periferico' => 'Desativado por Dano Periferico','Desativado por mal uso' => 'Desativado por mal uso','Movido para descarte(Conteiner)' => 'Movido para descarte(Conteiner)' ]]) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_garantia', 'Garantia até:',['class'=>'col-xs-1']) !!}
 {!! Form::date('prod_garantia', \Carbon\Carbon::now(new DateTimeZone('America/Sao_Paulo')) , ['class'=>'form-group']) !!}
 </div>
</h3>
 <div class="form-group">
 {!! Form::submit('Altera Product', ['class'=>'btn btn-primary']) !!}
 </div>
 {!! Form::close() !!}

 @endsection

 <!-- Modal -->
