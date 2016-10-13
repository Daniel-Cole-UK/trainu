<?php 

if ( ! function_exists ( 'trainu_setup') ) :

    function trainu_setup() {
        // let WordPress handle the Titles tags
        add_theme_support( 'title-tag' );
    }
endif;
add_action( 'after_setup_theme', 'trainu_setup' );

/* ---- Register Menus ---- */

function register_trainu_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
            'footer' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_trainu_menus' );

/* ---- Add Stylesheets ---- */

function trainu_scripts() {
    
    // Enqueue Main Stylesheet
    wp_enqueue_style( 'trainu_styles', get_stylesheet_uri() );
    // Enqueue Google Fonts, Raleway
    wp_enqueue_style( 'trainu_google_fonts', 'https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700' );
}
add_action( 'wp_enqueue_scripts', 'trainu_scripts' );

/* ---- Register Widget Areas ---- */

function trainu_widgets_init() {
    register_sidebar( array(
		'name'          => __( 'Main Sidebar', 'trainu' ),
		'id'            => 'main-sidebar',
		'description'   => __( 'Widgets added here will appear in all pages using the two column template.', 'trainu' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'trainu_widgets_init' );

/*
---------  Custom Classes Post Type --------
*/
    

