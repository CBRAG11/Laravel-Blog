@extends('layouts.master')

@section('Content')

<div class="col-sm-8">
	<h1>Sign Up</h1>

	<form method="post" action="/register">

		{{csrf_field()}}

		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" class="form-control" id="name" name="name" required>
		</div>

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="password" name="password" required>
		</div>

		<div class="form-group">
			<label for="password_confirmation">Confirm Password:</label>
			<input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
		</div>
		

		<div class="form-group">
			<input type="submit" class="btn btn-primary" id="submit" name="submit" value="submit">
		</div>
		
		<div class="form-group">
			@include('layouts.errors')
		</div>
	</form>
</div>
	
@endsection