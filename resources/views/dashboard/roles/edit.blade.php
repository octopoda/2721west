@extends('layouts.admin')

@section('content')
<section class="project-type__admin__list-wrapper">
			<div class="dashboard__section-title__title">
				<h2>Edit: {{ $role->role }}</h2>
			</div>

			@include('errors.list')

			<section>
				  {!! Form::model($role, ['method'=> 'PATCH', 'route'=>['dashboard.roles.update', $role->id]]) !!}
							@include('dashboard.roles._form', ['submitButtonText' => 'Update Role'])
					{!! Form::close() !!}
			</section>


@endsection