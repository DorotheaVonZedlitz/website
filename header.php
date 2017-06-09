<!DOCTYPE html>

<html lang="de">
  <head>
    <meta charset="utf-8" />
    <title><?php wp_title(); ?> </title>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>


    <?php wp_head(); ?>
  </head>



  <body <?php body_class(); ?>>
    <div id="wrapper">
      <div class="inner">
        <div id="header">

          <div id="menu">
            <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
              <div class="container-fluid" style="height: 80px;">
                <div class="row" style="margin-top: 10px;">
                  <!-- ****** Der Headerbereich ist immer Sichtbar ********* -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" name="button">
                      <i class="fa fa-bars"></i>
                    </button>
                    <div class="site-logo">
                      <a href="#" class="brand">
                      <img id="logo" src="http://linkit.tech/wp-content/themes/linkIT/assets/img/logo/LinkIT_Logo.jpg" alt=""></a>
                    </div>
                  </div>
                  <!-- *************** Headerbereich ende ****************** -->

                    <?php wp_nav_menu( array(
                      'menu' => 'menu',
                      'theme_location' => 'menu',
                      'depth' => 2,
                      'container' => 'div',
                      'container_class' => 'collapse navbar-collapse',
                      'container_id' => 'bs-example-navbar-collapse-1',
                      'menu_class' => 'nav navbar-nav navbar-right',
                      'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                      'walker' => new wp_bootstrap_navwalker())
                  ); ?>


                </div>

              </div>
            </nav>
        </div>




        </div><!-- #header -->
