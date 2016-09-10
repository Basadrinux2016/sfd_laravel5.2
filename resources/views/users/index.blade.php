@extends('template.main')

@section('title', 'Lista de Usuarios')

@section('content')
	<a href="{{ route('users.create') }}" class="btn btn-success">Registrar nuevo usuario</a> <br><br>
	<table class="table table-striped table-hover">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->type=="admin")
							<span class="label label-success">{{ $user->type }}</span>
						@else
							<span class="label label-primary">{{ $user->type }}</span>
						@endif
					</td>
					<td>
						<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden ="true"></span></a> 
						<a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿Desea eliminar el usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden ="true"></span></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}

@endsection