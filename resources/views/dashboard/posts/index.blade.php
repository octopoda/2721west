@extends('layouts.admin')

@section('content')

	<header class="dashboard__section-title">
		<div class="dashboard__section-title__title">
			<h1>Blog Posts</h1>
		</div>
		<div class="dashboard__section-title__action">
			<ul>
				<li><a href="{{ route('dashboard.posts.create') }}">Add a Post</a></li>
			</ul>
		</div>
	</header>


	<section class="dashboard__wrapper">
		@if(count($posts) == 0) 
			<h5>There are no posts in the system</h5>
		@else
			<ul class="dashboard__list">
			<table class="dashboard__list">
				<thead>
					<tr>
						<th>Title</th>
						<th>publish Date</th>
						<th>published</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>
					@foreach($posts as $post)
						
						<tr>
							<td>{{  $post->title }}</td>
							<td>{{  $post->publish_date }}</td>
							<td style="text-align:center">
								@if ($post->published) 
									<i class="fa fa-check" style="font-size:24px;"></i>
								@else 
									<i class="fa fa-times-circle" style="font-size:24px;"></i>
								@endif
							</td>

							<td>
								<ul class="dashboard__edits">
									<li class="button--edit"><a href=" {{ route('dashboard.posts.edit', $post->id) }}">Edit</a></li>
									<li class="button--delete transparent">
										 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.posts.destroy', $post->id]]) !!}
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