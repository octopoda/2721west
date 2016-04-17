@extends('layouts.admin')

@section('content')
<section class="project-type__admin__list-wrapper">
		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Edit Project:</h1>
				<h2>{{ $project->title }}</h2>
			</div>
		</header>

		@include('errors.list')

			<section class="dashboard__form">
				  {!! Form::model($project, ['method'=> 'PATCH', 'route'=>['dashboard.projects.update', $project->id], 'files' => true]) !!}
							@include('dashboard.projects._form', ['submitButtonText' => 'Update Project'])
					{!! Form::close() !!}
			</section>
</section>


@endsection