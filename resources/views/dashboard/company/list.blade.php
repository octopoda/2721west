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
				@foreach($companies as $company)
					<li>
						<span class="title">{{ $company->company }}</span>
						<span class="info">{{ $company->guid }}</span>
						<span><a href="mailto:{{ $company->email }}">{{ $company->email }}</a></span>
						<span>
							<ul class="dashboard__edits">
								<li class="button--edit"><a href=" {{ route('dashboard.company.edit', $company->id) }}">Edit</a></li>
								<li class="button--delete transparent">
									 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.company.destroy', $company->id]]) !!}
								 		{!! Form::submit('Delete', ['class' => 'transparent']) !!}
								  	{!! Form::close() !!}
								</li>
							</ul>
						</span>
					</li>
				@endforeach
			</ul>
		 @endif
	</section>

	

@endsection