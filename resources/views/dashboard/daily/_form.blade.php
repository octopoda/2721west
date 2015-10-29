	<div class="form-group">
		{!! Form::label('day', 'Day Number (000):') !!}
		{!! Form::text('day', null, ['class'=>'', 'placeholder'=>'001']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('type', 'UI Type') !!}
		{!! Form::text('type', null, ['class'=>'', 'placeholder'=>'Flash Message']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('image', 'Image Name:') !!}
		{!! Form::text('image', null, ['class'=>'', 'placeholder'=>'012.png']) !!}
	</div>

	<div class="form-group">
		{!! Form::checkbox('published', null, ['class'=>'', 'value'=>1 ])!!}
		{!! Form::label('published', 'Published:') !!}
	</div>

	
	<div class="form-group">
		{!! Form::submit($submitButtonText , ['class'=>'button']) !!}
	</div>
	