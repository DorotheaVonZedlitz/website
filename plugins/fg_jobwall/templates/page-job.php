<?php get_header(); ?>
  <div class="" id="main">
    <div class="container ">
      <div class="row">
        <div style="margin-top: 5vh; padding: 0px !important;" class="col-sm-12">

          <a class="fg_jobwall_btn" href="http://www.linkit.tech/jobwall">Zurück zur Übersicht</a>

          <div class="fg_jobwall_headline">
            <h1>Jobwall</h1>
          </div>

          <div class="fg_jobwall_bg" id="content">


          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="content fg_jobwallrow">
              <div class="col-sm-2">
              <?php the_post_thumbnail( array( 100, 100 ) ); ?>
            </div>
            <div class="col-sm-10">

              <h2><a href="<?php echo esc_html( get_post_meta( get_the_ID(), 'principle_duties', true ) ); ?>"><?php the_title(); ?></a></h2>
              <span>Veröffentlicht am: <?php the_date('d.m.Y'); ?></span>






            </div>
            </div>

          <?php endwhile; endif; ?>
          </div>
          <div style="margin-top: -5vh;" id="paginate" class="">
            <?php
            echo paginate_links();
             ?>
          </div>


        </div>


      </div>

    </div>



  </div> <!-- #main   - Alle Stellen in der Kategorie: <?php echo esc_url( get_term_link( $location ) )?>-->

<?php get_footer(); ?>
