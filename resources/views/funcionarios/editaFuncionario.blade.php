@extends('app')

@section('content')

<h1>Novo Funcionario</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif

 {!! Form::open(['url'=>"/$col->id/atualizafuncionario",'method'=>'put','class' => 'col-lg-12 control-label']) !!}
 <!-- Nome Form Input -->


 <div class="form-group">
 {!! Form::label('fun_nome', 'Nome:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_nome', $col->fun_nome, ['class'=>'form-control btn-info']) !!}
 </div>

 <!-- Descricao Form Input -->
 <div class="form-group">
 {!! Form::label('fun_matricula', 'Matricula:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_matricula', $col->fun_matricula, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('fun_cargo', 'Cargo:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_cargo', $col->fun_cargo, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('fun_setor', 'Setor:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_setor', $col->fun_setor, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Criar Colaborador', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
