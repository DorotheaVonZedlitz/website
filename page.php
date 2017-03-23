<?php get_header(); ?>
  <div id="main">

    <div class="container-fluid">
      <div class="row">
        <div id="content">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>
          <?php endwhile; endif; ?>
        </div><!-- #content -->

      </div>
    </div>


    <div class="clear"></div>
  </div><!-- #main -->

<?php get_footer(); ?>
