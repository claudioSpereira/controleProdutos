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

 {!! Form::open(['url'=>'/salvafuncionario','class' => 'col-lg-12 control-label']) !!}
 <!-- Nome Form Input -->


 <div class="form-group">
 {!! Form::label('fun_nome', 'Nome:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_nome', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <!-- Descricao Form Input -->
 <div class="form-group">
 {!! Form::label('fun_matricula', 'Matricula:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_matricula', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('fun_cargo', 'Cargo:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_cargo', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('fun_setor', 'Setor:',['class'=>'col-xs-1']) !!}
 {!! Form::text('fun_setor', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Criar Colaborador', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
