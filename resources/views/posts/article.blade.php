@extends('layouts.app')

@section('content')
	<article class="article__wrapper" >
		<div class="row">
			<section class="article__intro" style="background:url('{{ $post->post_image }}')">
				<h1>{{ $post->title }}</h1>
				<p class="article__author">Zack Davis</p>
			</section>

			<section class="article__body">
				{!! $post->content !!}
			</section>
		</div>

		<div class="row">
		
			
		</div>
	</article>
@endsection

