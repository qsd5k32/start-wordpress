<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- get blogname for title -->
    <title><?= get_bloginfo('name')?></title>
    <!-- get blog description -->
    <meta charset="description" content="<?php echo get_bloginfo( 'description' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   

    <!-- Theme Style from [style.css] -->
    <link rel="stylesheet" href="<?= get_bloginfo('template_directory') ?>/style.css">

    <?php wp_head();?>
  </head>
 <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-start align-items-center">
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="<?php echo get_bloginfo( 'wpurl' ); ?>">
          <!-- include blog name -->
          <?php echo get_bloginfo( 'name' ); ?>
          </a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
      </div>
    </div>
  </header>


  <div class="nav-scroller py-1 mb-2">
    <nav class="nav blog-nav d-flex justify-content-start">
      <!-- include pages links -->
      <?php wp_list_pages("&title_li=")?>
    </nav>
  </div>