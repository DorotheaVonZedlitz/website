<?php get_header(); ?>

        <div id="main">
          <div id="content">
            <div class="container">
              <div class="row">
                <div class="blogLeft col-sm-8">
                  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="article">
                      <h2 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                      <?php the_content(); ?>
                    </div> <!-- .article -->
                  <?php endwhile; endif; ?>
                  <div id="paginate" class="">
                    <?php
                    echo paginate_links();
                     ?>
                  </div>
                </div>
                <div class="col-sm-4">
                    <?php get_sidebar(); ?>
                </div>
              </div>
            </div>
          </div><!-- #content -->

	  <div class="clear"></div>
	</div><!-- #main -->

  <?php get_footer(); ?>
