@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('autoridadRequisitoLegal.index') }}">Autoridades de requisitos legales</a></li>
  <li class="active">Detalles</li>
</ol>

{!! Form::model($autoridad,['route' => ['autoridadRequisitoLegal.update',$autoridad->id], 'method' => 'PUT']) !!}

{!! Form::submit('Guardar',['class' => 'btn btn-primary separarTop separarBottom'])  !!}
<a style="text-decoration: none;" href="{{ route('autoridadRequisitoLegal.index') }}">
    {!! Form::button('Regresar',['class' => 'btn btn-default separarTop separarBottom'])  !!}
</a>


<div class="panel panel-primary">    
    <div class="panel-heading">Datos básicos</div>
    <div class="panel-body">

        <div class="row">   
            <div class="col-md-6 separarBottom">
                {!! Form::label('codigo','Código')  !!}
                {!! Form::text('codigo',$autoridad->codigo, ['class' => 'form-control', 'id'=>'codigo'])  !!}
            </div>
            <div class="col-md-6 separarBottom">
                {!! Form::label('tipo_autoridad','Autoridad requisito legal')  !!}
                {!! Form::text('tipo_autoridad',$autoridad->tipo_autoridad, ['class' => 'form-control mayusculas', 'required', 'id'=>'tipo_autoridad'])  !!}
            </div>
        </div>

    </div>
</div>

{!! Form::submit('Guardar',['class' => 'btn btn-primary separarTop separarBottomButtonn'])  !!}
<a style="text-decoration: none;" href="{{ route('autoridadRequisitoLegal.index') }}">
    {!! Form::button('Regresar',['class' => 'btn btn-default separarTop separarBottomButtonn'])  !!}
</a>

{!! Form::close() !!}

@endsection