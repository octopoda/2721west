@extends('layouts.admin')

@section('content')

	<header class="dashboard__section-title">
		<div class="dashboard__section-title__title">
			<h1>Companies</h1>
			<h2></h2>
		</div>
		<div class="dashboard__section-title__action">
			<ul>
				<li><a href="{{ route('dashboard.company.create') }}">New Company</a></li>
			</ul>
		</div>
	</header>


	<section class="dashboard__wrapper">
		@if(count($companies) == 0) 
			<h5>There are no companies in the database</h5>
		@else
			<ul class="dashboard__list">
			<table class="dashboard__list">
				<thead>
					<tr>
						<th>Company</th>
						<th>Name</th>
						<th>Email</th>
						<th>Guid</th>
						<th>Session</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($companies as $company)
						
						<tr>
							
							<td class="title">
								@if ($company->visited)
									<i class="fa fa-check"></i>
								@endif
								{{ $company->company }}
							</td>
							<td>{{ $company->first_name }}  {{ $company->last_namae }}</td>
							<td class="info">http://beyondtheunicorn.com/{{ $company->guid }}</td>
							<td><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></td>
							<td><a href="{{ route('company-sessions', $company->id) }}">View Sessions</a></td>
							<td>
								<ul class="dashboard__edits">
									<li class="button--edit"><a href=" {{ route('dashboard.company.edit', $company->id) }}">Edit</a></li>
									<li class="button--delete transparent">
										 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.company.destroy', $company->id]]) !!}
									 		{!! Form::submit('Delete', ['class' => 'transparent']) !!}
									  	{!! Form::close() !!}
									</li>
								</ul>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
				
			</ul>
		 @endif
	</section>

	

@endsection