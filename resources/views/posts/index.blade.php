@extends('layouts.app')

@section('content')
	<article class="articleList__wrapper" data-ng-controller="AboutController as vm">
		<div class="row">
			@foreach($posts as $post)
				<section class="articleList row">
					<div class="articleList__image">
						<img src="{{ $post->post_image }}" alt="{{ $post->title }}">
					</div>
					<div class="article__summary">
						<h2><a href="/posts/{{ $post->direct_link }}">{{ $post->title }}</a></h2>
						{!! $post->summary !!}
						<a href="/posts/{{ $post->direct_link }}">Read More</a>
					</div>
				</section>
			@endforeach
		</div>

		<div class="row">
			{!! $posts->render(); !!}
			
		</div>
	</article>
@endsection

