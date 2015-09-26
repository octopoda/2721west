@extends('layouts.app')

@section('content')

			<section class="row">
				<h3>Login</h3>
			</section>
			<section class="row">	
					<div class="errors">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li class="error">{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					</div>

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="email">E-Mail Address</label>
							<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" id="password" class="form-control" name="password">
						</div>

						<div class="form-group">
							<input type="checkbox" name="remember" id="remember-me">
							<label for="remember-me">Remember Me</label>	
						</div>

						<div class="form-group">
								<button type="submit" class="btn btn-primary">Login</button>
								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
						</div>

					</form>
				
@endsection
