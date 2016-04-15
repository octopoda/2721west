<div class="form-group">
	{!! Form::label('email', 'Company Email:') !!}
	{!! Form::email('email', null, ['placeholder'=>'hireme@awesomecompany.com']) !!}
</div>


<div class="form-group">
	{!! Form::label('company', 'Company Name:') !!}
	{!! Form::text('company', null, ['placeholder'=>'Company Name']) !!}
</div>


<div class="form-input">
	{!! Form::label('Message', 'Message for Company:') !!}
	{!! Form::textarea('Message', null, ['class'=>'class', 'placeholder'=>'placeholder', 'cols' => 10, 'rows' => 20]) !!}
</div>

<div class="form-input checkbox-list">
		<p>Selected Projects:</p>
		<ul>
			@foreach($projects as $id=>$project) 
				<li>
					{!! Form::checkbox('project_id[]', $id, (isset($projectIds) && in_array($id, $projectIds)) ? true : false, ['id' => $project]) !!}
					{!! Form::label($project, $project) !!}
				</li>
			@endforeach
		</ul>
	</div>

<div class="form-group">
		<div class="form-group">
			{!! Form::submit($submitButtonText , ['class'=>'button']) !!}
	  </div>
</div>