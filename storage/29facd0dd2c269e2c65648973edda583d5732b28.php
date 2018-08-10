 <div class="blog-post">
            <a href="/Posts/<?php echo e($post->id); ?>">
                <h4 class="blog-post-title"><?php echo e($post->Title); ?></h4>
            </a>
            
           
            <p class="blog-post-meta"><?php echo e($post->created_at->toFormattedDateString()); ?></p>

          <?php echo e($post->body); ?>

  </div><!-- /.blog-post -->
