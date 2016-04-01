@extends('layouts.admin')

@section('content')

	<header class="dashboard__section-title">
		<div class="dashboard__section-title__title">
			<h1>Daily UI</h1>
		</div>
		<div class="dashboard__section-title__action">
			<ul>
				<li><a href="{{ route('dashboard.dailyui.create') }}">Add a Day</a></li>
			</ul>
		</div>
	</header>


	<section class="dashboard__wrapper">
		@if(count($dailies) == 0) 
			<h5>There are no days added</h5>
		@else
			<ul class="dashboard__list">
			<table class="dashboard__list">
				<thead>
					<tr>
						<th>Day</th>
						<th>type</th>
						<th>image</th>
						<th>published</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($dailies as $ui)
						
						<tr>
							<td>{{  $ui->day }}</td>
							<td>{{ $ui->type }}</td>
							<td>{{ $ui->image }}</td>
							<td style="text-align:center">
								@if ($ui->published) 
									<i class="fa fa-check" style="font-size:24px;"></i>
								@else 
									<i class="fa fa-times-circle" style="font-size:24px;"></i>
								@endif
							</td>

							<td>
								<ul class="dashboard__edits">
									<li class="button--edit"><a href=" {{ route('dashboard.dailyui.edit', $ui->id) }}">Edit</a></li>
									<li class="button--delete transparent">
										 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.dailyui.destroy', $ui->id]]) !!}
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