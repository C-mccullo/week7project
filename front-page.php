<?php get_header();  ?>


<div class="hero">
  <div class="wrapper">
    <h2><?php bloginfo('description'); ?></h2>
  </div>
</div>


<div class="content">

  <div class="main">

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>

    <?php endwhile; // end the loop?>

  </div> <!-- /.main -->


  <?php get_sidebar(); ?>
</div> <!-- /,content -->

<?php get_footer(); ?>