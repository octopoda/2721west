<div class="form-group">
	{!! Form::label('first_name', 'First Name:') !!}
	{!! Form::text('first_name'	, null, ['placeholder'=>'First Name']) !!}
</div>


<div class="form-group">
	{!! Form::label('last_name', 'Last Name:') !!}
	{!! Form::text('last_name', null, ['placeholder'=>'Last Name']) !!}
</div>


<div class="form-group">
	{!! Form::label('email', 'Company Email:') !!}
	{!! Form::email('email', null, ['placeholder'=>'hireme@awesomecompany.com']) !!}
</div>


<div class="form-group">
	{!! Form::label('company', 'Company Name:') !!}
	{!! Form::text('company', null, ['placeholder'=>'Company Name']) !!}
</div>
	

<div class="form-group">
		<div class="form-group">
			{!! Form::submit($submitButtonText , ['class'=>'button']) !!}
	  </div>
</div>