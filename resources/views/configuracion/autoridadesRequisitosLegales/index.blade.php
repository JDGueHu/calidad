@extends('layouts.app')

@section('content')

	<ol class="breadcrumb">
	  <li><a id="modulo" href="{{ route('autoridadRequisitoLegal.index') }}">Autoridades de requisitos legales</a></li>
	</ol>

	
	<a href="{{ route('autoridadRequisitoLegal.create') }}" class="btn btn-primary separarTop">Crear</a>
	<a href="{{ route('listasDesplegables.index') }}" class="btn btn-default separarTop">Regresar</a>
	
	<hr>
	<div class="table-responsive">
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código</th>
					<th>Tipo de requisito</th>
					<th>Estado</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tiposAutoridades as $tiposAutoridad)
					<tr>
						<td>{{ $tiposAutoridad->codigo }}</td>
						<td>{{ $tiposAutoridad->tipo_autoridad }}</td>
						@if($tiposAutoridad->alive)
							<td><span class="label label-success">Activo</span></td>
						@else
							<td><span class="label label-danger">Inactivo</span></td>
						@endif
						<td>
							<a data-toggle="tooltip" data-placement="top" title="Detalles" href="{{ route('autoridadRequisitoLegal.show',$tiposAutoridad->id) }}" class="btn btn-default btn-xs">
								<i class="fa fa-eye" aria-hidden="true"></i>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Editar" href="{{ route('autoridadRequisitoLegal.edit',$tiposAutoridad->id) }}" class="btn btn-warning btn-xs">
								<i class="fa fa-pencil" aria-hidden="true"></i>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Activar" href="{{ route('autoridadRequisitoLegal.activar',$tiposAutoridad->id) }}" class="btn btn-success btn-xs confirm_activar_F">
								<i class="fa fa-check-square-o" aria-hidden="true"></i>
							</a>
							<a data-toggle="tooltip" data-placement="top" title="Inactivar" href="{{ route('autoridadRequisitoLegal.destroy',$tiposAutoridad->id) }}" class="btn btn-danger btn-xs confirm_F">
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