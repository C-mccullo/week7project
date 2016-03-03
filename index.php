<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <div class="container">
		<img src="<?php bloginfo('template_directory'); ?>/images/hero.jpg" alt="">
    <div class="content blog-content">
    		<?php get_template_part('loop', 'index'); ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>