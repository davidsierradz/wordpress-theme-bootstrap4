<?php get_header(); ?>

    <div class="row">

        <div class="col-sm-8 blog-main">

<?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            get_template_part('content', get_post_format());
        endwhile;
?>
      <nav class="blog-pagination">
            <?php next_posts_link( 'Previous' ); ?>
            <?php previous_posts_link( 'Next' ); ?>
      </nav>
<?php
    endif;
?>

        </div> <!-- /.blog-main -->

        <?php get_sidebar(); ?>

    </div> <!-- /.row -->

<?php get_footer(); ?>
