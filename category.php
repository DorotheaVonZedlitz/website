<?php get_header(); ?>
  <div id="main">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div id="content">
            <span id="category_title">Nach "<?php single_cat_title( '', true ); ?>" gefiltert.</span>
            <div id="category_description"><?php echo category_description(); ?></div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div class="article">
                <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                <?php the_content(); ?>
              </div> <!-- .article -->
            <?php endwhile; endif; ?>
          </div><!-- #content -->
        </div>
        <div class="col-sm-4">
          <div id="sidebar">
            <?php get_sidebar(); ?>
          </div><!-- #sidebar -->
        </div>

      </div>

    </div>

    <div class="clear"></div>
  </div><!-- #main -->
<?php get_footer(); ?>
