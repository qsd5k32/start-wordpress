<!-- include header [header.php}] -->
<?php get_header();?>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <?php
        // check if there is posts
        if( have_posts() )
        {
          // fetch posts
          while( have_posts() )
          {
            the_post();
            // include [contant.php] tempalate and show post
            get_template_part('content' , get_post_format());
          }
        }
      ?>

      <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#" tabindex="-1" aria-disabled="true">Newer</a>
      </nav>

    </div><!-- /.blog-main -->

    <!-- include sidebar -->
    <?php get_sidebar();?>
  </div><!-- /.row -->

</main><!-- /.container -->
<!-- include footer -->
<?php get_footer();?>
