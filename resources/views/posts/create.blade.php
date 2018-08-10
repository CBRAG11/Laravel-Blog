@extends('layouts.master')

@section('Content')
<form method="POST" action="/Posts">
	{{ csrf_field() }}
  <div class="form-group">
  	<hr>
  	<h1>Publish your post</h1>
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter your Title here..." required>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <input type="text" class="form-control" id="body" name="body" placeholder="Enter your Content here..." required>
  </div>
  
 <div class="form-group">
  	<button type="submit" class="btn btn-primary">Publish</button>
 </div>
 @include('layouts.errors')
</form>
<hr>
@endsection
