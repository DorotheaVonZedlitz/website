<?php get_header(); ?>
  <div id="main">
    <div class="container">
      <div class="row">
        <div style="margin-top: 5vh;" class="col-sm-8">
          <div id="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
              <div class="blog-header"></div>
              <p><i style="color: #64B4DC;" class="fa fa-clock-o"></i> <?php the_date('d.m.Y'); ?> <i style="margin-left: 20px; color: #64B4DC;" class="fa fa-pencil" aria-hidden="true"></i> <?php the_author(); ?>
                <i style="margin-left: 20px; color: #64B4DC;" class="fa fa-folder-open-o"></i>
                  <?php the_category(', '); ?> </p>

              <div class="entry">
          <?php the_content(); ?>
          </div>

            <?php endwhile; endif; ?>
            <?php comments_template(); ?>
          </div><!-- content -->
        </div>
        <div class="col-sm-4">
          <div id="sidebar">
            <?php get_sidebar(); ?>
          </div><!-- #sidebar -->
        </div>

      </div>

    </div>



  </div> <!-- #main -->

<?php get_footer(); ?>
