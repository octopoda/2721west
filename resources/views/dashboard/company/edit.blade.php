@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Company Contact</h1>
			</div>

			<div class="dashboard__section-title__action">
				<h2>Edit: {{ $company->fullName() }}</h2>
			</div>
		</header>
	
		@include('errors.list')

	<section class="dashboard-form">
		 {!! Form::model($company, ['method'=>'PATCH', 'route'=>['dashboard.company.update', $company->id]]) !!}
		 	@include('dashboard.company._form', ['submitButtonText' => 'Update Company Contact'])
		  {!! Form::close() !!}
	</section>

@endsection