@extends('layouts.admin')

@section('content')
<section class="project-type__admin__list-wrapper">
			<div class="dashboard__section-title__title">
				<h1>Projects</h1>
				<h2>Edit: {{ $project->title }}</h2>
			</div>

			@include('errors.list')

			<section>
				  {!! Form::model($project, ['method'=> 'PATCH', 'route'=>['dashboard.projects.update', $project->id], 'files' => true]) !!}
							@include('dashboard.projects._form', ['submitButtonText' => 'Update Project'])
					{!! Form::close() !!}
			</section>


@endsection