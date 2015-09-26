@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Projects</h1>
				<h2></h2>
			</div>
			<div class="dashboard__section-title__action">
				<ul>
					<li><a href="{{ route('dashboard.projects.create') }}">New Project</a></li>
				</ul>
			</div>
		</header>

		<section>
			@if (count($projects) == 0)
					<h5>There are no projects in the Database</h5>	
			@else 
				<ul>
				@foreach($projects as $project) 
					<li>
					<span class="title">{{ $project->title }}</span>
					<ul class="dashboard__edits">
						<li class="button--edit"><i class="fa fa-pencil"></i><a href=" {{ route('dashboard.projects.edit', $project->id) }}">Edit</a></li>
						<li class="button--delete transparent">
							 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.projects.destroy', $project->id]]) !!}
							 			{!! Form::submit('Delete', ['class' => 'transparent']) !!}
							  {!! Form::close() !!}
						</li>
					</ul>
				</li>
				@endforeach
				</ul>
			@endif
		</section>

@endsection	