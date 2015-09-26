	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-input', 'placeholder'=>'Project Title']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('role', 'Role in Project:') !!}
		{!! Form::text('role', null, ['class'=>'form-input', 'placeholder'=>'What was your role in the project']) !!}
	</div>	

	<div class="form-group">
		{!! Form::label('url', 'Url:') !!}
		{!! Form::text('url', null, ['class'=>'form-input', 'placeholder'=>'Url of Project']) !!}
	</div>

	<div class="form-group">
			{!! Form::label('project_type_id', 'Project Type:') !!}
			{!! Form::select('project_type_id', $projectType, '1', ['class' => 'class']) !!}
	</div>

	<div class="form-group">
			{!! Form::label('main-image', 'Main-Image:') !!}
			{!! Form::file('main-image') !!}
	</div>

	<div class="form-group">
			{!! Form::label('description', 'Project Description:') !!}
			{!! Form::textarea('description', null, ['class'=>'form-textarea', 'placeholder'=>'', 'rows'=>'10']) !!}
	</div>
			
 
	<div class="form-group">
			{!! Form::submit($submitButtonText, ['class'=>'button']) !!}
	</div>