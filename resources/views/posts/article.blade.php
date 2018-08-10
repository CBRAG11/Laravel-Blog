 <div class="blog-post">
            <a href="/Posts/{{$post->id}}">
                <h4 class="blog-post-title">{{ $post->Title }}</h4>
            </a>
            
           
            <p class="blog-post-meta">{{ $post->created_at->toFormattedDateString()}}</p>

          {{$post->body}}
  </div><!-- /.blog-post -->
