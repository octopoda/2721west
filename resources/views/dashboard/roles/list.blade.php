@extends('layouts.admin')

@section('content')
<section class="project-type__admin__list-wrapper">
	
		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Project Roles</h1>
				<h2></h2>
			</div>
			<div class="dashboard__section-title__action">
				<ul>
					<li><a href="{{ route('dashboard.roles.create') }}">New Project Role</a></li>
				</ul>
			</div>
		</header>

	

		<section class="dashboard__title-list">
			<ul class="roles__list">
				@if (count($roles) != 0) 
						<table class="dashboard__list">
							<thead>
								<tr>
									<th>Role</th>
									<th>&nbsp;</th>
									<th>&nbsp;</th>
									<th>Edit</th>
								</tr>
							</thead>
							<tbody>
								@foreach($roles as $role)
									
									<tr>
										
										<td class="title">
											{{ $role->role }}
										</td>
										<td>&nbsp;</td>
										<td>&nbsp;</td>
										<td>
											<ul class="dashboard__edits">
												<li class="button--edit"><a href=" {{ route('dashboard.roles.edit', $role->id) }}">Edit</a></li>
												<li class="button--delete transparent">
													 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.roles.destroy', $role->id]]) !!}
												 		{!! Form::submit('Delete', ['class' => 'transparent']) !!}
												  	{!! Form::close() !!}
												</li>
											</ul>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					
				@else
					<h5>No roles created yet.</h5>
				@endif
			</ul>
		</section>


</section>


@endsection