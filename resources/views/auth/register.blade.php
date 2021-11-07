@extends('layouts.front.template')

@section('content')
    <!-- breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
				<li class="active">Register Page</li>
			</ol>
		</div>
	</div>
<!-- //breadcrumbs -->
<!-- register -->
	<div class="register">
		<div class="container">
			<h3 class="animated wow zoomIn" data-wow-delay=".5s">Register Here</h3>
			<div class="login-form-grids">
				<h6 class="animated wow slideInUp" data-wow-delay=".5s">Login information</h6>
				<form method="POST" action="{{ route('register') }}">
					@csrf
					<div class="form-group ">
						<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
						@error('name')
							<span class="invalid-feedback" role="alert">
								<p style="color: red">{{ $message }}</p>
							</span>
						@enderror
				    </div>
				    <div class="form-group ">
						<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">
						@error('email')
							<span class="invalid-feedback" role="alert">
								<p style="color: red">{{ $message }}</p>
							</span>
						@enderror
				    </div>
				    <div class="form-group ">
						<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
						@error('password')
							<span class="invalid-feedback" role="alert">
								<p style="color: red">{{ $message }}</p>
							</span>
						@enderror
				    </div>
				    <div class="form-group ">
						<input id="password-confirm" type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password">
				    </div>
					<div class="register-check-box">
						<div class="check">
							<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
						</div>
					</div>
					<input type="hidden" name="role_id" value="2">
					<input type="submit" value="Register">
				</form>
			</div>
			<div class="register-home animated wow slideInUp" data-wow-delay=".5s">
				<a href="{{ route('home') }}">Home</a>
			</div>
		</div>
	</div>
<!-- //register -->
@endsection