@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Edit {{ $post->title }}</h1>
			</div>
		</header>


	<section class="dashboard-form">
		 {!! Form::model($post, ['method'=>'PATCH', 'route'=>['dashboard.posts.update', $post->id], "enctype"=>"multipart/form-data"]) !!}
		 	@include('dashboard.posts._form', ['submitButtonText' => 'Update Post'])
		  {!! Form::close() !!}
	</section>

@endsection

