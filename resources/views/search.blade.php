@extends('Admin.index')

@section('content')

<h1>Novo Colaborador</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif

 {!! Form::open(['url'=>'/$name/pesquisa','class' => 'col-lg-12 control-label']) !!}
 <!-- Nome Form Input -->

 <div class="form-group">
 {!! Form::label('name', 'name:') !!}
 {!! Form::text('name', null, ['class'=>'form-control']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Criar Colaborador', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
