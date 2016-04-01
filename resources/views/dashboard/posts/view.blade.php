@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<ul class="dashboard__edits">
				<li class="button--edit"><a href=" {{ route('dashboard.posts.edit', $post->id) }}">Edit</a></li>
				<li class="button--delete transparent">
					 {!! Form::open(['method'=>'DELETE', 'route' => ['dashboard.posts.destroy', $post->id]]) !!}
				 		{!! Form::submit('Delete', ['class' => 'transparent']) !!}
				  	{!! Form::close() !!}
				</li>
			</ul>
		</header>

	
		<article>
			<h1>{{ $post->title }}</h1>
			{!! $post->content !!}

			<h5>Summary:</h5>
			{!! $post->summary !!}
		</article>


@endsection