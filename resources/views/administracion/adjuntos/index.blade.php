@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
	  <li><a id="modulo" href="{{ route('adjuntos.index') }}"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;&nbsp;Adjuntos</a></li>
	</ol>

	<a href="{{ route('adjuntos.create') }}" class="btn btn-primary separarTop">Crear</a>
	
	<hr>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Nombre adjunto</th>
					<!-- <th>Adjunto</th> -->
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($adjuntos as $adjunto)
					<tr>
                        <td>{{ $adjunto->Empleado->identificacion }}</td> 
                        <td>{{ $adjunto->Empleado->nombres }}</td> 
                        <td>{{ $adjunto->Empleado->apellidos }}</td>
						<td>{{ $adjunto->nombre }}</td>
<!-- 						<td>
							<a title="Adjunto" href="{{ $adjunto->adjunto }}" target="_blank">
							{{ $adjunto->adjunto }}
							</a>
						</td> -->
						@if($adjunto->alive)
							<td><span class="label label-success">Activo</span></td>
						@else
							<td><span class="label label-danger">Inactivo</span></td>
						@endif
						<td>
							<a data-toggle="tooltip" data-placement="top" title="Detalles" href="{{ route('adjuntos.show',$adjunto->id) }}" class="btn btn-default btn-xs">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Activar" href="{{ route('adjuntos.activar',$adjunto->id) }}" class="btn btn-success btn-xs confirm_activar_M">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Inactivar" href="{{ route('adjuntos.destroy',$adjunto->id) }}" class="btn btn-danger btn-xs confirm_M">
								<i class="fa fa-times" aria-hidden="true"></i>
							</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@endsection

@section('js')
	<script src="{{ asset('js/table.js') }}"></script>
	<script src="{{ asset('js/confirm.js') }}"></script>
@endsection