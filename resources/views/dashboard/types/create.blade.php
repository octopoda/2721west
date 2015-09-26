@extends('layouts.admin')

@section('content')

{{-- 			<header class="dashboard__section-title">
				<div class="dashboard__section-title__title">
					<h1>Create a new Project Type</h1>
					<h2></h2>
				</div>
			</header>

			@include('errors.list')
			
			<section>
				  {!! Form::open(['url'=>'dashboard/project-types']) !!}
							@include('dashboard.types._form', ['submitButtonText' => 'Create Project Type'])
					{!! Form::close() !!}
			</section> --}}


			<?php
			    $encrypter = app('Illuminate\Encryption\Encrypter');
			    $encrypted_token = $encrypter->encrypt(csrf_token());
			 ?>

			<header class="dashboard__section-title" data-ng-controller="ProjectTypeController as ptc">
				<div class="dashboard__section-title__title">
					<h1>Create New Project Angular</h1>


					<section>
						<form ng-submit="ptc.submit()">
							<div class="form-input">
								<label>Name</label>
								<input type="text" name="Name" data-ng-model="ptc.formData.name" id="name" value="test" placeholder="What service did you provide">
							</div>

							<div class="form-group">
								{{-- <input type="hidden" name="_method" value="PUT"> --}}
    							<input type="hidden" name="_token" value="{{ csrf_token() }}">
								<button type="submit" class="button">Create New Project</button>
							</div>
						</form>
					</section>
				</div>
			</header>

@endsection