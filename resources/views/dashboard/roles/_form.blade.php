	<div class="form-group">
		{!! Form::label('role', 'Role Name:') !!}
		{!! Form::text('role', null, ['class'=>'form-input', 'placeholder'=>'Project role']) !!}
	</div>

	<div class="form-group">
			{!! Form::submit($submitButtonText, ['class'=>'button']) !!}
	</div>