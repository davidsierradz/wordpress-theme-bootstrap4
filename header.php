<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

    <?php wp_head(); ?>
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="<?php echo get_bloginfo('wpurl'); ?>">Home</a>
          <?php wp_list_pages('&title_li='); ?>
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
      <a href="<?php echo get_bloginfo('wpurl'); ?>"><h1 class="blog-title"><?php echo get_bloginfo('name'); ?></h1></a>
      <p class="lead blog-description"><?php echo get_bloginfo('description'); ?></p>
      </div>
    </div>
    <div class="container">
