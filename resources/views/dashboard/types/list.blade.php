@extends('layouts.admin')

@section('content')
<section class="project-type__admin__list-wrapper">
	
		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Project Types</h1>
				<h2></h2>
			</div>
			<div class="dashboard__section-title__action">
				<ul>
					<li><a href="{{ route('dashboard.project-types.create') }}">New Project Type</a></li>
				</ul>
			</div>
		</header>

	

		<section class="dashboard__title-list">
			<ul class="project-types__list">
				@foreach ($projectTypes as $type) 
				<li>
					<span class="title">{{ $type->name }}</span>
					<ul class="dashboard__edits">
						<li class="button--edit"><i class="fa fa-pencil"></i><a href=" {{ route('dashboard.project-types.edit', $type->id) }}">Edit</a></li>
						<li class="button--delete transparent">
							 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.project-types.destroy', $type->id]]) !!}
							 			{!! Form::submit('Delete', ['class' => 'transparent']) !!}
							  {!! Form::close() !!}
						</li>
					</ul>
				</li>
				@endforeach
			</ul>
		</section>


</section>


@endsection