@extends('app')

@section('content')

<h1>Novo Produto</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif
 @if(Session::has('salva'))
     <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('salva') !!}</em></div>
 @endif

 {!! Form::open(['url'=>'/salvaproduto', 'files'=>'true']) !!}
 <!-- Nome Form Input -->
 <div class="form-group">
 {!! Form::label('type_id','Produto', ['class'=>'col-xs-1']) !!}
 {!! Form::select('type_id', $produtos, null ,array('class'=>'form-control btn-info')) !!}
 </div>

 <div class="form-group">
 {!! Form::label('fun_id','Funcionario', ['class'=>'col-xs-1']) !!}
 {!! Form::select('fun_id', $funcionarios, null ,array('class'=>'form-control btn-info')) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_nome', 'Nome:', ['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_nome', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <!-- Descricao Form Input -->
 <div class="form-group">
 {!! Form::label('prod_patrimonio', 'Patrimonio:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_patrimonio', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_serie', 'Serie:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_serie', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_marca', 'Marca:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_marca', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_modelo', 'Modelo:',['class'=>'col-xs-1']) !!}
 {!! Form::text('prod_modelo', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
   {!! Form::label('prod_status', 'Status:',['class'=>'col-xs-1']) !!}
   {!! Form::select('prod_status', ['== Please select == ' => ['Ativado' => 'Ativado', 'Desativado por Dano Periferico' => 'Desativado por Dano Periferico','Desativado por mal uso' => 'Desativado por mal uso','Movido para descarte(Conteiner)' => 'Movido para descarte(Conteiner)' ]]) !!}
 </div>

 <div class="form-group">
 {!! Form::label('prod_garantia', 'Garantia:') !!}
 {!! Form::date('prod_garantia', \Carbon\Carbon::now(new DateTimeZone('America/Sao_Paulo')) , ['class'=>'form-group']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Create Product', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
