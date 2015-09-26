@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Create New Company Contact</h1>
			</div>
		</header>


	<section class="dashboard-form">
		 {!! Form::open(['method'=>'POST', 'route'=>'dashboard.company.store']) !!}
		 	@include('dashboard.company._form', ['submitButtonText' => 'Create New Company Contact'])
		  {!! Form::close() !!}
	</section>

@endsection