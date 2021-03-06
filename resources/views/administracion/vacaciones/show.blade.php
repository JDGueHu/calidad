@extends('layouts.app')

@section('content')

<ol class="breadcrumb">
  <li><a href="{{ route('vacaciones.index') }}"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;Ausentismo</a></li>
  <li class="active">Detalles</li>
</ol>

{!! Form::model($ausentismo) !!}

<a style="text-decoration: none;" href="{{ route('vacaciones.index') }}">
    {!! Form::button('Regresar',['class' => 'btn btn-default separarTop separarBottom'])  !!}
</a>

<h1 id="nombreEmpleado">{{$ausentismo[0]->nombres}} {{$ausentismo[0]->apellidos}}</h1>
<div class="panel panel-primary">    
    <div class="panel-heading">Datos básicos</div>
    <div class="panel-body">

        <div class="row">   
            <div class="col-md-4 separarBottom">
                {!! Form::label('tipoIdentificacion','Tipo identificación')  !!}
                {!! Form::text('tipoIdentificacion',$ausentismo[0]->tipoDocumento, ['class' => 'form-control', 'id'=>'tipoIdentificacion', 'required', 'readonly'])  !!}
                {!! Form::label('tipoIdentificacion','Campo requerido', ['class' => 'textoAlerta ocultar','id'=>'requeridoTipoIdentificacionEmpleado'])  !!}
            </div>
            <div class="col-md-4 separarBottom">
                {!! Form::label('identificacion','Identificación')  !!}
                {!! Form::text('identificacion',$ausentismo[0]->identificacion, ['class' => 'form-control', 'required', 'id'=>'identificacion', 'readonly'])  !!}
                {!! Form::label('identificacion','Campo requerido', ['class' => 'textoAlerta ocultar','id'=>'requeridoIdentificacionEmpleado'])  !!}
            </div>
        </div>
        <hr>

        <div class="row">   
            <div class="col-md-3 separarBottom">
                {!! Form::label('tipoVacacion','Tipo ausentismo')  !!}
                {!! Form::select('tipoVacacion', $tiposAusentismo, $ausentismo[0]->tipoVacaciones_id, ['class' => 'form-control', 'placeholder' => 'Seleccione tipo de ausentismo','id'=>'tipoVacacion','disabled'])  !!} 
            </div>
            <div class="col-md-3 separarBottom">
                {!! Form::label('fechaInicio','Fecha de inicio')  !!}
                {!! Form::date('fechaInicio',$ausentismo[0]->fechaInicio, ['class' => 'form-control', 'readonly', 'id'=>'fechaInicio'])  !!}
            </div>
            <div class="col-md-3 separarBottom">
                {!! Form::label('fechaFin','Fecha de finalización')  !!}
                {!! Form::date('fechaFin',$ausentismo[0]->fechaFin, ['class' => 'form-control', 'readonly', 'id'=>'fechaFin', 'readonly'])  !!}
            </div>
            <div class="col-md-3 separarBottom">
                {!! Form::label('dias','Número de días')  !!}
                {!! Form::text('dias',null, ['class' => 'form-control', 'readonly', 'id'=>'dias'])  !!}
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 separarBottom">
                {!! Form::label('adjunto','Adjunto')  !!}
                <a title="Adjunto" href="{{ $ausentismo[0]->adjunto }}" target="_blank">
                    {{ $ausentismo[0]->adjunto  }}
                </a>
            </div>
        </div>
        <div class="row">  
            <div class="col-md-12 separarBottom">
                {!! Form::label('detalles','Detalles')  !!}
                {!! Form::textarea('detalles',$ausentismo[0]->detalles, ['class' => 'form-control', 'readonly', 'id'=>'detalles','size' => '30x3'])  !!}
            </div>
        </div>

    </div>
</div>

<a style="text-decoration: none;" href="{{ route('vacaciones.index') }}">
    {!! Form::button('Regresar',['class' => 'btn btn-default separarTop separarBottomButtonn'])  !!}
</a>

{!! Form::close() !!}

@endsection

@section('js')
    <script src="{{ asset('js/vacaciones/show.js') }}"></script>
@endsection