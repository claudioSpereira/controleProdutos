@extends('app')

@section('content')

<h1>Novo Colaborador</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif

 {!! Form::open(['url'=>'/salvacolaborador','class' => 'col-lg-12 control-label']) !!}
 <!-- Nome Form Input -->
 <div class="form-group">
 {!! Form::label('col_id','Produto',['class'=>'col-xs-1']) !!}
 {!! Form::select('col_id', $produtos, null ,array('class'=>'form-control btn-info', 'placeholder' => '--Please select--')) !!}
 </div>

 <div class="form-group">
 {!! Form::label('col_nome', 'Nome:',['class'=>'col-xs-1']) !!}
 {!! Form::text('col_nome', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <!-- Descricao Form Input -->
 <div class="form-group">
 {!! Form::label('col_matricula', 'Matricula:',['class'=>'col-xs-1']) !!}
 {!! Form::text('col_matricula', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('col_cargo', 'Cargo:',['class'=>'col-xs-1']) !!}
 {!! Form::text('col_cargo', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('col_setor', 'Setor:',['class'=>'col-xs-1']) !!}
 {!! Form::text('col_setor', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Criar Colaborador', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
