@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Add Daily UI</h1>
			</div>
		</header>


	<section class="dashboard-form">
		 {!! Form::open(['method'=>'POST', 'route'=>'dashboard.dailyui.store']) !!}
		 	@include('dashboard.daily._form', ['submitButtonText' => 'Add UI'])
		  {!! Form::close() !!}
	</section>

@endsection