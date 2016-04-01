@extends('layouts.admin')

@section('content')

		<header class="dashboard__section-title">
			<div class="dashboard__section-title__title">
				<h1>Add Post</h1>
			</div>
		</header>


	<section class="dashboard-form">
		 {!! Form::open(['method'=>'POST', 'route'=>'dashboard.posts.store', "enctype"=>"multipart/form-data"]) !!}
		 	@include('dashboard.posts._form', ['submitButtonText' => 'Add Post'])
		  {!! Form::close() !!}
	</section>

@endsection