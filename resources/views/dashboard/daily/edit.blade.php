@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Edit Daily UI</h1>
			</div>
		</header>


	<section class="dashboard-form">
		 {!! Form::model($daily, ['method'=>'PATCH', 'route'=>['dashboard.dailyui.update', $daily->id]]) !!}
		 	@include('dashboard.daily._form', ['submitButtonText' => 'Update UI'])
		  {!! Form::close() !!}
	</section>

@endsection