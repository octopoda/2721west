@extends('layouts.admin')

@section('content')

	<header class="dashboard__section-title">
		<div class="dashboard__section-title__title">
			<h1>Companies</h1>
			<h2></h2>
		</div>
		<div class="dashboard__section-title__action">
		</div>
	</header>


	<section class="dashboard__wrapper">
		@if(count($companies) == 0) 
			<h5>There are no companies in the database</h5>
		@else
			
			<table class="dashboard__list">
				<thead>
					<tr>
						<th>Company</th>
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
							<td class="info">https://2721west.com/{{ $company->guid }}</td>
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
		
		 @endif
	</section>

	

@endsection