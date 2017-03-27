<?php get_header(); ?>
  <div class="blogbg" id="main">
    <div class="container blogbg">
      <div class="row">
        <div class="col-sm-8">
          <div class="blogLeft" id="content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div style="padding: 15px;" class="blogarticle">
              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
              <div class="blog-header"></div>
              <p><i style="color: #64B4DC;" class="fa fa-clock-o"></i> <?php the_date('d.m.Y'); ?> <i style="margin-left: 20px; color: #64B4DC;" class="fa fa-pencil" aria-hidden="true"></i> <?php the_author(); ?>
                <i style="margin-left: 20px; color: #64B4DC;" class="fa fa-folder-open-o"></i>
                  <?php the_category(', '); ?> </p>

              <div class="entry">
          <?php the_content(); ?>
          </div>
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
