<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php wp_title(' | ',true, 'right'); ?></title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head();?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <header>
        <div class="propaganda">
          <a href="#">
            <img src="<?php bloginfo ('url'); ?>/wp-content/uploads/2016/06/propaganda-image.jpg" class="img-responsive propaganda-image"/>
        </a>
        </div>
          <nav class="navbar navbar-default">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <?php
                    the_custom_logo();

                    if ( is_front_page() && is_home() ) : ?>
                      <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php else : ?>
                      <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php endif;

                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                      <p class="site-description"><?php echo $description; ?></p>
                    <?php endif;
                  ?>
                </div>


                   <?php
                      wp_nav_menu( array(
                          'menu'              => 'primary',
                          'theme_location'    => 'primary',
                          'depth'             => 2,
                          'container'         => 'div',
                          'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                          'menu_class'        => 'nav navbar-nav',
                          'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                          'walker'            => new wp_bootstrap_navwalker())
                      );
                  ?>

                 <form method="get" id="searchform" class="form-4rodas" action="<?php bloginfo('url'); ?>/">
                  <div>
                    <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" placeholder="Pesquisar" class="col-md-8" />
                  </div>
                </form>


              </div><!-- /.container-fluid -->
            </nav>
      </header>