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

 {!! Form::open(['url'=>'/salvamv']) !!}
 <!-- Nome Form Input -->


 <div class="form-group">
 {!! Form::label('mv_nome','Motivos', ['class'=>'col-xs-1']) !!}
 {!! Form::select('mv_nome',
 array('Dano Cabo HDMI/VGA'=>'Dano Cabo HDMI/VGA', 'Cabo Y'=>'Cabo Y', 'Cabo Logico Desconectado'=>'Cabo Logico Desconectado',
'Sem Maquina'=>'Sem Maquina', 'Dano na Maquina'=>'Dano na Maquina', 'Dano no Projetor'=>'Dano no Projetor', 'Senha do Professor'=>'Senha do Professor',
'Estabilizador com Danor'=>'Estabilizador com Danor','Sem Eletricidade'=>'Sem Eletricidade',
'Sem Internet'=>'Sem Internet'), null ,array('class'=>'form-control btn-info', 'placeholder' => '--Please select--')) !!}
 </div>

 <div class="form-group">
 {!! Form::label('mv_qntd', 'Qtd de Salas:',['class'=>'col-xs-2']) !!}
 {!! Form::text('mv_qntd', null, ['class'=>'form-control btn-info']) !!}
 </div>

 <div class="form-group">
 {!! Form::label('mv_atendimento', 'Breve Descrição de Atedimento:',['class'=>'col-xs-4']) !!}
 {!! Form::text('mv_atendimento', null, ['class'=>'form-control btn-info']) !!}
 </div>


 <div class="form-group">
 {!! Form::submit('Create Movtive', ['class'=>'btn btn-primary']) !!}
 </div>

 {!! Form::close() !!}

 @endsection
