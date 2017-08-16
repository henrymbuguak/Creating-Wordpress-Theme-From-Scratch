<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Henrylab Theme | awesometheme</title>
    <?php wp_head(); ?>
  </head>

  <?php
     if (is_front_page()):
       $awesome_classes = array('awesome-class','my-class');
     else:
       $awesome_classes = array('no-awesome-class');
     endif;
   ?>

  <body <?php body_class($awesome_classes); ?>>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <!-- Navigation Menu -->
          <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">HenryLab Theme</a>
              </div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <?php
                   wp_nav_menu(array(
                     'theme_location' => 'primary',
                     'container'=>false,
                     'menu_class' => 'nav navbar-nav navbar-right'
                   )
                 );
                ?>
              </div>
            </div>
          </nav>
          <!-- End Menu -->

        </div>
      </div>

    <img src="<?php header_image(); ?>" alt="" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
