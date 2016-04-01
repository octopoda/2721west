@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Create New Project</h1>
				<h2></h2>
			</div>
		</header>

		<section class="dashboard__form">
			 {!! Form::open(['method'=> 'POST', 'route'=>'dashboard.projects.store', 'files' => true]) !!}
				@include('dashboard.projects._form', ['submitButtonText' => 'Create New Project'])
			 {!! Form::close() !!}
		</section>

@endsection	