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
			<section class="dashboard__wrapper">
				@if(count($projects) == 0) 
					<h5>There are no projects in the database</h5>
				@else
					
			<table class="dashboard__list">
				<thead>
					<tr>
						<th>Title</th>
						<th>Roles</th>
						<th>Url</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($projects as $project)
						
						<tr>
							
							<td class="title">
								{{ $project->title }}
							</td>
							<td class="info" width="40%">
								@foreach ($project->roles as $role)
									<span style="font-size:12px;">{{ $role->role }}, </span>
								@endforeach
							</td>
							<td style="font-size:12px;'">{{ $project->url }}</td>
							<td>
								<ul class="dashboard__edits">
									<li class="button--edit"><a href=" {{ route('dashboard.projects.edit', $project->id) }}">Edit</a></li>
									<li class="button--delete transparent">
										 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.projects.destroy', $project->id]]) !!}
									 		{!! Form::submit('Delete', ['class' => 'transparent']) !!}
									  	{!! Form::close() !!}
									</li>
								</ul>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		
		 @endif
	</section>

		</section>

@endsection	