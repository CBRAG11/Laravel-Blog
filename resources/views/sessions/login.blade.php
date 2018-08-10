@extends('layouts.master')

@section('Content')

<div class="col-sm-8">
	<h1>Login</h1>
	<hr>

	<form method="post" action="/login">

		{{csrf_field()}}

		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
		</div>

		<div class="form-group">
			<label for="password">Password:</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Enter password"required>
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