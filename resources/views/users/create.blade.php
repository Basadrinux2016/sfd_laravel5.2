@extends('template.main')

@section('title', 'Crear Usuario')

@section('content')
	
	

	{!!  Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			{!! Form::label('name', 'Nombre') !!}
			<div>
				{!! Form::text('name',old('name'), ['class' => 'form-control', 'placeholder' => 'Nombre completo','required']) !!}
				@if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electronico') !!}
			{!! Form::email('email',null, ['class' => 'form-control', 'placeholder' => 'example@gmail.com','required']) !!}
			<span id="email-content" class="help-block" style="color:red">
            </span>
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Contraseña','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type',['member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control','placeholder'=>'-- Seleccione --','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>


	{!! Form::close() !!}
@endsection

@section('js')
	<script>
		
	</script>
@endsection