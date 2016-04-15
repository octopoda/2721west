@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Create New Role</h1>
				<h2></h2>
			</div>
		</header>

		<section class="dashboard__form">
			 {!! Form::open(['method'=> 'POST', 'route'=>'dashboard.roles.store']) !!}
				@include('dashboard.roles._form', ['submitButtonText' => 'Create New Role'])
			 {!! Form::close() !!}
		</section>

@endsection	