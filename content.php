<div class="blog-post">
        <h2 class="blog-post-title">
        	<!-- the title of post  -->
        	<?php the_title(); ?>
        	</h2>
        <p class="blog-post-meta">
        	<!-- creation date -->
        	<?php the_date() ?> by 
        	<a href="#">
        		<!-- author of post -->
        		<?php the_author();?>
        	</a></p>
		
		<!-- excerpt from post -->
        <?php the_excerpt();?>
		<!-- link for the post -->
        <a href="<?php the_permalink();?>">Read more</a>
</div><!-- /.blog-post -->