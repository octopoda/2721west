	<div class="form-group">
		{!! Form::label('title', 'Title:') !!}
		{!! Form::text('title', null, ['class'=>'form-input', 'placeholder'=>'Project Title']) !!}
	</div>

	<div class="form-group">
		{!! Form::label('url', 'Url:') !!}
		{!! Form::text('url', null, ['class'=>'form-input', 'placeholder'=>'Url of Project']) !!}
	</div>

	<div class="form-input checkbox-list">
		<p>What was your role in this project:</p>
		<ul>
			@foreach($roles as $id=>$role) 
				<li>
					{!! Form::checkbox('role_id[]', $id, (isset($projectRoles) && in_array($id, $projectRoles)) ? true : false, ['id' => $role]) !!}
					{!! Form::label($role, $role) !!}
				</li>
			@endforeach
		</ul>
	</div>

	<div class="form-group">
			{!! Form::label('project_image', 'Project Image: (https://s3.amazonaws.com/2721west-assets/images/thumbs)') !!}
			{!! Form::text('project_image', null, ['class'=>'form-input', 'placeholder'=>'Url of Project') !!}

	</div>

 
	<div class="form-group">
			{!! Form::hidden('published', 1) !!}
			{!! Form::submit($submitButtonText, ['class'=>'button']) !!}
	</div>