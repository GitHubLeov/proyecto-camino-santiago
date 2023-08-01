<?php
// Registrar menú de navegación //
	function register_my_menus() {
  		register_nav_menus(
   		 array(
      		'header-menu' => __( ' Menú principal' ),
			'menu-rutas-camino' => __( ' Menú para las rutas' )
    	 )
   		);
 		}
 	add_action( 'init', 'register_my_menus' );

// Añadir capacidad para gestionar las imagenes destacada en las entradas //

  add_theme_support( 'post-thumbnails' );

// Añadir logo personalizado desde Apariencia > personalizar > identidad del sitio

	function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

//Añadir widget (barra lateral)//

function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'barra-lateral ', 'theme_name' ),
		'id'            => 'barra-lateral',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'texto intro blog', 'theme_name' ),
		'id'            => 'intro-blog',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '<section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'intro caminos ', 'theme_name' ),
		'id'            => 'intro-texto-caminos',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'footer ', 'theme_name' ),
		'id'            => 'footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'pre-footer ', 'theme_name' ),
		'id'            => 'pre-footer',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}

add_action( 'widgets_init', 'themename_widgets_init' );

//Cargar archivos dependiente en head y al final del body

function add_theme_scripts() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_style( 'columnas', get_template_directory_uri() . '/columnas.css');

    wp_enqueue_style( 'google-fonts',"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap");

	wp_enqueue_style( 'google-fonts-headers', "https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap");


	wp_enqueue_script(  'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js', array( 'jquery' ), 1.1, false );

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



