@extends('app')

@section('content')

<h1>Adicionar <strong>{{ $produtos->type_nome }}</strong></h1>

 @if ($errors->any())
 <ul class="alert alert-warning">
 @foreach($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 @endif

 {!! Form::open(['url'=>'/$id/salvaaddtype']) !!}
 <!-- Nome Form Input -->
 <div class="form-group">
 {!! Form::hidden('id', $produtos->id, ['class'=>'col-xs-1']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('type_qntd', 'Quantidade:', ['class'=>'col-xs-1']) !!}
 {!! Form::text('type_qntd', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::submit('Adicionar', ['class'=>'btn btn-success']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
