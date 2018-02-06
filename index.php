<?php get_header(); ?>

<div class="container">  
    <div class="row">

      <div class="col-sm-8 blog-main">
      	<?php if(have_posts()) : ?>
      		<?php while(have_posts()) : the_post(); ?>
	          <div class="blog-post animate-box">
	            <h2 class="blog-post-title animate-box">
	            	<a href="<?php the_permalink(); ?>">
	            	<?php the_title(); ?>
            		</a>
            	</h2>
	            <p class="blog-post-meta animate-box">
	            	<?php the_time('F j, Y g:i a'); ?>
	            	by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
	            		<?php the_author(); ?>
	            	   </a>
            	</p>
            	<?php if(has_post_thumbnail()) : ?>
            		<div class="post-thumb">
	            		<?php the_post_thumbnail(); ?>
            		</div>
          		<?php endif; ?>

	            <?php the_excerpt(); ?>

              <p><a href="<?php the_permalink(); ?>" class="btn btn-sm btn-special text-right animate-box">Read more</a></p>

	          </div><!-- /.blog-post -->
    	<?php endwhile; ?>
      <?php else : ?>
      	<p><?php __('No Posts Found'); ?></p>
      <?php endif; ?>

        </div><!-- /.blog-main -->

      </div><!-- /.row -->
</div> <!-- /.container -->

<?php get_footer(); ?>
