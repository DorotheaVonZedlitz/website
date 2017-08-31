<?php get_header(); ?>
  <div class="blogbg" id="main">
    <div class="container blogbg">
      <div class="row">
        <div class="col-sm-12">

          <div class="content jobwallrow">


          <div class="col-sm-2">
            <?php the_post_thumbnail( array( 100, 100 ) ); ?>
          </div>
          <div class="col-sm-10">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'principle_duties', true ) ); ?>"><?php the_title(); ?></a></h2>
            <span>Veröffentlicht am: <?php the_date('d.m.Y'); ?></span>
            <p style="color: red;"><?php echo esc_html( get_post_meta( get_the_ID(), 'principle_duties', true ) ); ?></p>
            <?php endwhile; endif; ?>
          </div>
          </div>

        </div>


      </div>

    </div>



  </div> <!-- #main -->

<?php get_footer(); ?>
