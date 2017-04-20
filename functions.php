<?php
/**
 * Causes functions and definitions
 *
 * @package Causes
 */
 
/*
 * Loads the Options Panel
 *
 */

/*----------------------------*/
/*	Adding customizer with kirki 
/*----------------------------*/ 
include_once( trailingslashit(get_template_directory()) . '/lib/customizer.php' );
include_once( trailingslashit(get_template_directory()) . '/lib/kirki/kirki.php' );
 
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @see http://developer.wordpress.com/themes/content-width/Enqueue
 */
 
if ( ! isset( $content_width ) ) {
	$content_width = 970; /* pixels */
}


/**
 * Theme support and thumbnail sizes
*/
 
if( ! function_exists( 'causes_theme_setup' ) ) {

	function causes_theme_setup() {
	
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on BuildPress, use a find and replace
		 */
		 
		load_theme_textdomain( 'causes', get_template_directory() . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 		

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		 
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size( 150, 150, true);
		add_image_size('causes-news-box', 220, 154, true);
		add_image_size('causes-slider-box', 531, 428, true);

		// Menus
		add_theme_support( 'menus' );
		register_nav_menu( 'main-menu', _x( 'Main Menu', 'backend', 'causes' ) );

		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// Add CSS for the TinyMCE editor
		add_editor_style();
	}
	add_action( 'after_setup_theme', 'causes_theme_setup' );
}


/**
 * Enqueue CSS stylesheets
 */
 
if( ! function_exists( 'causes_enqueue_styles' ) ) {
	function causes_enqueue_styles() {
	
		// owl carousel
		wp_enqueue_style( 'causes-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0' );		
		
		// owl theme
		wp_enqueue_style( 'causes-owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0' );
		
		// font awesome
		wp_enqueue_style( 'causes-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0' );

		// main style
	    wp_enqueue_style( 'causes-style', get_stylesheet_uri() );
		
	}
	add_action( 'wp_enqueue_scripts', 'causes_enqueue_styles' );
}


/**
 * Enqueue JS scripts
 */
 
if( ! function_exists( 'causes_enqueue_scripts' ) ) {
	function causes_enqueue_scripts() {

		// OWL carousel for sliders
		wp_enqueue_script( 'causes-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), null );			
		
		// main for script js
		wp_enqueue_script( 'causes-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null );			
		
	
		// for nested comments
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'causes_enqueue_scripts' );
}

// load script for  IE9

function causes_ie_support_header() {
    echo '<!--[if lt IE 9]>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/assets/js/html5.js' ) . '"></script>'. "\n";
    echo '<![endif]-->'. "\n";
}

add_action( 'wp_head', 'causes_ie_support_header', 1 );

/**
 * Register sidebars for Causes
 *
 * @package Causes
 */

function causes_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => __( 'Blog Sidebar', "causes"),
		'id' => 'blog-sidebar',
		'description' => __( 'Sidebar on the blog layout.', "causes"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	

	// Footer Sidebar
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 1', "causes"),
		'id' => 'footer-widget-area-1',
		'description' => __( 'The footer widget area 1', "causes"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 2', "causes"),
		'id' => 'footer-widget-area-2',
		'description' => __( 'The footer widget area 2', "causes"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 3', "causes"),
		'id' => 'footer-widget-area-3',
		'description' => __( 'The footer widget area 3', "causes"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area 4', "causes"),
		'id' => 'footer-widget-area-4',
		'description' => __( 'The footer widget area 4', "causes"),
		'before_widget' => '<aside id="%1$s" class="widget %2$s"> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
}

add_action( 'widgets_init', 'causes_sidebars' );

// Custom CSS Output

if (!function_exists('causes_custom_styles')) { 
		function causes_custom_styles() {
		
			$main_color = "#009aff";
			$second_color = "#0068ac";			
	        $main_color = esc_attr(get_theme_mod('pwt_ceneral_color', '#009aff'));
			$second_color = esc_attr(get_theme_mod('pwt_second_color', '#0068ac'));
			
			echo '<style type="text/css">'. "\n";
			echo '.color-main, a, h1, h1 a, .article-blog h2 a:hover, .article-single h2 a:hover, .article-cause h2 a:hover, .article-news h2 a:hover, .events-list h2 a:hover, .widget-events h2 a:hover, .article-event h2 a:hover, h6 a:hover, .meta a:hover, a.meta-clock:hover, a.meta-location:hover, a.meta-phone:hover, a.meta-email:hover, .widget-archives a:hover { color: '.$main_color.';}';
			echo '.border-main, .pagination a:hover, .section-articles h4:after, .contact-info-block h4:after, .social-media-block h4:after, .sidebar-container h3 { border-color: '.$main_color.'; }';
			echo '.bg-main, .menu-top-bar a:hover, .menu-top a:hover, .menu-top .current-menu-item a:hover, .menu-top a.hover, .menu-top .current-menu-item a.hover, .menu-top .sub-menu, .icon-search, .icon-menu span, .button:hover, .button-styled:hover, .buttom-download, a.icon-disc:hover, .pagination a:hover, input#submit, .button-form, .wpcf7-submit { background-color: '.$main_color.'; }';
			echo '.sidebar-container .search-submit:hover, .footer .widget .search-submit:hover{ background-color: '.$main_color.'; }';
			echo '.copyright-block { background-color: '.$main_color.'; }';
			echo '.menu-top-bar li, .menu-contact li { border-color: '.$main_color.'; }';
			echo '.color-main-dark, .menu-top-mob a:hover { color: '.$second_color.'; }';
			echo '.border-main-dark { border-color: '.$second_color.'; }';
			echo '.date { background-color:  '.$second_color.'; }';
			echo '.bg-main-dark, .top-bar, .menu-top-bar, .menu-contact, input.icon-search:hover, .icon-menu:hover span, .buttom-download:hover, .section-causes, .sidebar-container h3, .section-contact-form, .footer { background-color: '.$second_color.'; }';
			echo 'blockquote { border-left: 5px solid '.$second_color.'; }';
			echo '.menu-top .current-menu-item a { background-color: '.$second_color.'; }';
			echo 'th { background: none repeat scroll 0 0 '.$second_color.'; border: 1px solid '.$second_color.'; }';
			echo 'abbr, acronym, dfn { border-bottom: 1px dotted '.$second_color.'; }';
			echo '.sidebar-container .search-submit{ background-color: '.$second_color.';}';
			echo '.menu-top .sub-menu li { border-color: '.$second_color.'; }';
			echo '.footer .widget .search-submit{ background-color: '.$second_color.'; }';
			echo '.footer h3, .footer h3 a, .widget-menu-footer .current-menu-item a, .widget-menu-footer a:hover, .widget-tweets a:hover, .copyright-block a:hover { color: '.$main_color.'; }';
			echo '.footer .widget li a:hover{ color: '.$main_color.'; }';			 
			echo "</style>". "\n";
		}
	add_action('wp_head', 'causes_custom_styles');
}

// Create Function Credits

if ( ! function_exists( 'causes_credits' ) ) :
	function causes_credits() {
		$text =  __( 'Theme created by ', "causes").'<a href="http://www.pwtthemes.com/">'.__( 'PWT', "causes").'</a>'.__( '. Powered by ', "causes").'<a href="http://wordpress.org/">'.__( 'WordPress.org', "causes").'</a>';            
		echo apply_filters( 'causes_credits_text', $text) ;
	}
endif; 

add_action( 'causes_display_credits', 'causes_credits' );

?>