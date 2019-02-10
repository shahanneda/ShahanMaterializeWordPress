<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/> -->

</head>
<body >

<nav class="light-blue lighten-1" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="<?php echo get_home_url()?>" class="brand-logo"><?php
  $custom_logo_id = get_theme_mod( 'custom_logo' );
  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
  // if ( has_custom_logo() ) {
  //       echo '<img src="'. esc_url( $logo[0] ) .'" class="responsive-img ">';
  // } else {
        echo  get_bloginfo( 'name' ) ;
  // }


  ?></a>
    <ul class="right hide-on-med-and-down">
        <?php wp_nav_menu( array(

           'theme_location' => 'header-menu',
           'menu_id' =>"",
           'menu_class' => 'right hide-on-med-and-down'
        ) ); ?>
    </ul>

    <?php wp_nav_menu( array(

     'theme_location' => 'header-menu',
     'menu_id' =>"nav-mobile",
      'menu_class' => "side-nav",
      'container' => "",
      'before'=>"Hello"

  ) ); ?>
    <!-- <ul id="nav-mobile" class="side-nav">
      <li class="black-text">1</li>
      <li class="black-text">2</li>
      <li class="black-text">3</li>
      <li class="black-text">4</li>
      <li class="black-text">5</li>
      <li class="black-text">6</li>
      <li class="black-text">7</li>
      <li class="black-text">8</li>
      <li class="black-text">9</li>
      <li class="black-text">10</li>

      <li>hell</li>
    </ul> -->
    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
  </div>
</nav>
<?php wp_head(); ?>
