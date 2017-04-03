<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php 
      wp_head();
    ?>
  </head>

  <body <?php echo body_class(); ?>>
    <div class="top-wrapper">
      <div class="container">
        <div class="row">
            <nav class="col-md-10 nav navbar-toggleable-md">
              <button class="navbar-toggler navbar-toggler-right btn" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
              </button>            
              
                  <a class="nav-link active" href="<?php bloginfo('url');?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon.jpeg" class="img-rounded" alt="Cinque Terre" width="100" height="50">
                  </a>

                  <?php
                    wp_nav_menu(array(
                      'theme_location'            =>'main-menu',
                      'container'                 => 'div',
                      'container_class'           => 'collapse navbar-collapse',
                      'container_id'              =>  'navbar',
                      'menu_class'                => 'nav justify-content-center',
                      'fallback_cb'               => '__return_false',
                      'items_wrap'                => '<ul id="%1$s" class="%2$s ml-auto mr-auto">%3$s</ul>',
                      'depth'                     => 2,
                      'walker'                    =>new bootstrap_4_walker_nav_menu(),              


                      ));
                  ?> 
            </nav>

          <div class="col-md-2 top-search-button-wrapper">
           <!-- search  -->
              <a href="<?php echo bloginfo('url'); ?>?s=" id="top-search-button" class="btn btn-outline-primary"><span class="fa fa-search"></span></a>            
          </div>
        </div>
      </div>
    </div>

