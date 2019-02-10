<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'materialize_css', get_stylesheet_directory_uri() . '/css/materialize.css',false,'1.1','all');
  wp_enqueue_style( 'materialize_css_icons', 'https://fonts.googleapis.com/icon?family=Material+Icons',false,'1.1','all');
  wp_enqueue_script("jquery");
  wp_enqueue_script( 'materialize-js', get_stylesheet_directory_uri() . '/js/materialize.js' );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
//<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Footer Text',
		'id'            => 'footer_text',
		'before_widget' => '<p class="grey-text text-lighten-4">',
		'after_widget'  => '</p>',
		'before_title'  => '<h5 class="white-text">',
		'after_title'   => '</h5>',
	) );
  // <div class="col l3 s12">
  //   <!-- <h5 class="white-text">Settings</h5>
  //   <ul>
  //     <li><a class="white-text" href="#!">Link 1</a></li>
  //     <li><a class="white-text" href="#!">Link 2</a></li>
  //     <li><a class="white-text" href="#!">Link 3</a></li>
  //     <li><a class="white-text" href="#!">Link 4</a></li>
  //   </ul>
  // </div> -->
  // <div class="col l3 s12">
  register_sidebar( array(
    'name'          => 'Footer Text 2',
    'id'            => 'footer_text_2',
    'before_widget' => '<div class="col s12">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="white-text">',
    'after_title'   => '</h5>',
  ) );
  register_sidebar( array(
    'name'          => 'Footer Text 3',
    'id'            => 'footer_text_3',
    'before_widget' => '<div class="col l3 s12">',
    'after_widget'  => '</div>',
    'before_title'  => '<h5 class="white-text">',
    'after_title'   => '</h5>',
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function mytheme_customize_register( $wp_customize ) {
   //All our sections, settings, and controls will be added here
   $wp_customize->add_section( 'cd_colors' , array(
    'title'      => 'Colors',
    'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'background_color' , array(
        'default'     => '#43C6E4',
        'transport'   => 'refresh',
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
  	  'label'      => 'Background Color',
    	'section'    => 'cd_colors',
    	'settings'   => 'background_color',
    ) ) );


}
add_action( 'customize_register', 'mytheme_customize_register' );

add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
             body { background: #<?php echo get_theme_mod('background_color', '#43C6E4'); ?>; }
         </style>
    <?php
}



/////

 ?>

 <?php

add_action( 'customize_register', 'ShahansWPMat_register_theme_customizer' );
/*
 * Register Our Customizer Stuff Here
 */
function ShahansWPMat_register_theme_customizer( $wp_customize ) {
	// Create custom panel.
	$wp_customize->add_panel( 'text_blocks', array(
		'priority'       => 500,
		'theme_supports' => '',
		'title'          => __( 'Home Page Text', 'ShahansWPMat' ),
		'description'    => __( 'Set editable text for certain content.', 'ShahansWPMat' ),
	) );

	// Add section.
	$wp_customize->add_section( 'left_services_section' , array(
		'title'    => __('Left','ShahansWPMat'),
		'panel'    => 'text_blocks',
		'priority' => 10
	) );
	// Add setting
	$wp_customize->add_setting( 'home_left_title', array(
		 'default'           => __( 'default text', 'ShahansWPMat' ),
		 'sanitize_callback' => 'sanitize_text'
	) );
	// Add control
	$wp_customize->add_control( new WP_Customize_Control(
	    $wp_customize,
		'left_title',
		    array(
		        'label'    => __( 'Title ', 'ShahansWPMat' ),
		        'section'  => 'left_services_section',
		        'settings' => 'home_left_title',
		        'type'     => 'text'
		    )
	    )
	);

  $wp_customize->add_setting( 'home_left_text', array(
     'default'           => __( 'default text', 'ShahansWPMat' ),
     'sanitize_callback' => 'sanitize_text'
  ) );
  // Add control
  $wp_customize->add_control( new WP_Customize_Control(
      $wp_customize,
    'custom_footer_text',
        array(
            'label'    => __( 'Text ', 'ShahansWPMat' ),
            'section'  => 'left_services_section',
            'settings' => 'home_left_text',
            'type'     => 'textarea'
        )
      )
  );
//CENTER Text
$wp_customize->add_section( 'center_services_section' , array(
  'title'    => __('Center','ShahansWPMat'),
  'panel'    => 'text_blocks',
  'priority' => 13
) );

$wp_customize->add_setting( 'home_center_title', array(
   'default'           => __( 'default text', 'ShahansWPMat' ),
   'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
  'title_center',
      array(
          'label'    => __( 'Title', 'ShahansWPMat' ),
          'section'  => 'center_services_section',
          'settings' => 'home_center_title',
          'type'     => 'text'
      )
    )
);


// Add setting
$wp_customize->add_setting( 'home_center_text', array(
   'default'           => __( 'default text', 'ShahansWPMat' ),
   'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
  'center',
      array(
          'label'    => __( 'Text', 'ShahansWPMat' ),
          'section'  => 'center_services_section',
          'settings' => 'home_center_text',
          'type'     => 'textarea'
      )
    )
);


////////right
$wp_customize->add_section( 'right_services_section' , array(
  'title'    => __('right','ShahansWPMat'),
  'panel'    => 'text_blocks',
  'priority' => 13
) );
// Add setting
$wp_customize->add_setting( 'home_right_text', array(
   'default'           => __( 'default text', 'ShahansWPMat' ),
   'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
  'right',
      array(
          'label'    => __( 'Title', 'ShahansWPMat' ),
          'section'  => 'right_services_section',
          'settings' => 'home_right_text',
          'type'     => 'text'
      )
    )
);

$wp_customize->add_setting( 'home_right_description', array(
   'default'           => __( 'default text', 'ShahansWPMat' ),
   'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
  'right_description',
      array(
          'label'    => __( 'Description Right', 'ShahansWPMat' ),
          'section'  => 'right_services_section',
          'settings' => 'home_right_description',
          'type'     => 'textarea'
      )
    )
);




////////Main Titke
$wp_customize->add_section( 'Main_Content' , array(
  'title'    => __('Main Content','ShahansWPMat'),
  'panel'    => 'text_blocks',
  'priority' => 13
) );
// Add setting
$wp_customize->add_setting( 'home_title', array(
   'default'           => __( 'default text', 'ShahansWPMat' ),
   'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
  'title',
      array(
          'label'    => __( 'Title', 'ShahansWPMat' ),
          'section'  => 'Main_Content',
          'settings' => 'home_title',
          'type'     => 'text'
      )
    )
);

$wp_customize->add_setting( 'title_extra_text', array(
   'default'           => __( 'default text', 'ShahansWPMat' ),
   'sanitize_callback' => 'sanitize_text'
) );
// Add control
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
  'extra_text',
      array(
          'label'    => __( 'Description', 'ShahansWPMat' ),
          'section'  => 'Main_Content',
          'settings' => 'title_extra_text',
          'type'     => 'textarea'
      )
    )
);


 	// Sanitize text
	function sanitize_text( $text ) {
	    return $text;
	}



}


function themename_custom_logo_setup() {
    $defaults = array(
      'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

?>
