<div class="form-input">
	{!! Form::label('name', 'Project Type:') !!}
	{!! Form::text('name', null, ['class'=>'class', 'placeholder'=>'What service did you provide']) !!}
</div>

<div class="form-group">
			{!! Form::submit($submitButtonText, ['class'=>'button']) !!}
</div>