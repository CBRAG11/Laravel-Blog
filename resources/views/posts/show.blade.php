@extends('layouts.master')

@section('Content')
<div class="col-sm-8 blog-main">
       
            <h2>{{ $post->Title }}</h2>

            <p class="blog-post-meta">By  {{ $post->user->name }} on {{ $post->created_at->toFormattedDateString()}}</p>
            {{$post->body}}

            <hr>
            <h4>Comments:</h4>
            <div class="comments">
            	<ul class="list-group">
	            	@foreach($post->comments as $comment)
	            	<article>
	            		<li class="list-group-itm">
	            		<strong>
	            			{{$comment->created_at->diffForHumans()}}
                                    
	            		</strong> &nbsp

	            		{{$comment->body}}
	            		</li>
	            	</article>
	            	@endforeach
            	</ul>
            </div>

            <hr>

            <div class="card">
            	<div class="card-block">
            		<form method="post" action="/Posts/{{ $post->id }}/comments">
            			{{ csrf_field()}}
            			<div class="form-group">
            				{{-- <input type="text" name="comment" id="comment" required placeholder="Enter Comment">
            				<input type="submit" name="submit" value="Post Comment" class="btn btn-primary"> --}}
            				<textarea name="body" placeholder="Enter Comment" class="form-control" required></textarea>
            			</div>
            			<div class="form-group">
            				<input type="submit" name="submit" value="Post Comment" class="btn btn-primary">
            			</div>
            			@include('layouts.errors')
            		</form>		
            	</div>
            </div>
            
</div>

@endsection