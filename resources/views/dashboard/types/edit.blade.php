@extends('layouts.admin')

@section('content')
<section class="project-type__admin__list-wrapper">
			<div class="dashboard__section-title__title">
				<h1>Project Types</h1>
				<h2>Edit: {{ $projectType->name }}</h2>
			</div>

			@include('errors.list')

			<section>
				  {!! Form::model($projectType, ['method'=> 'PATCH', 'route'=>['dashboard.project-types.update', $projectType->id]]) !!}
							@include('dashboard.types._form', ['submitButtonText' => 'Update Project Type'])
					{!! Form::close() !!}
			</section>


@endsection