@extends('app')

@section('content')

<h1>Tipo Produto</h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif

 {!! Form::open(['url'=>'/salvatype']) !!}
 <!-- Nome Form Input -->

 <div class="form-group">
 {!! Form::label('type_nome', 'Nome:', ['class'=>'col-xs-1']) !!}
 {!! Form::text('type_nome', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('type_qntd', 'Quantidade:', ['class'=>'col-xs-1']) !!}
 {!! Form::text('type_qntd', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Criar Tipo', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
