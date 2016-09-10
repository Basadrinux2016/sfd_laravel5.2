@extends('template.main')

@section('title', 'Editar Usuario <a href="">'.$user->name.'</a>')

@section('content')

	{!!  Form::open(['route' => ['users.update',$user->id], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name',$user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email',$user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type',['admin' => 'Administrador','member' => 'Miembro'], $user->type, ['class' => 'form-control']) !!}	
			
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}
@endsection