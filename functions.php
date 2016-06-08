<?php


// Replaces the excerpt "more" text by a link
function new_excerpt_more($more) {
       global $post;
	return '...';
    // return '<a class="moretag" href="'. get_permalink($post->ID) . '"> ...Read More.</a>';
}

function custom_excerpt_length( $length ) {
return 30;
}

add_filter( ‘excerpt_length’, ‘custom_excerpt_length’, 500 );


add_filter('excerpt_more', 'new_excerpt_more');
	
	//Gets post cat slug and looks for single-[cat slug].php and applies it
add_filter('single_template', create_function(
	'$the_template',
	'foreach( (array) get_the_category() as $cat ) {
		if ( file_exists(TEMPLATEPATH . "/single-{$cat->slug}.php") )
		return TEMPLATEPATH . "/single-{$cat->slug}.php"; }
	return $the_template;' )
);

if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(

'label' => 'Secondary Image',
'id' => 'secondary-image',
'post_type' => 'post'
 ) )
;

 }

function resize_thumb () {
   add_theme_support( 'post-thumbnails' );
   set_post_thumbnail_size( '500', '333', true );
}

add_action ( 'after_setup_theme', 'resize_thumb' );

add_image_size( 'square', 500, 500, true ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode


// make category use parent category template
function load_cat_parent_template($template) {

    $cat_ID = absint( get_query_var('cat') );
    $category = get_category( $cat_ID );

    $templates = array();

    if ( !is_wp_error($category) )
        $templates[] = "category-{$category->slug}.php";

    $templates[] = "category-$cat_ID.php";

    // trace back the parent hierarchy and locate a template
    if ( !is_wp_error($category) ) {
        $category = $category->parent ? get_category($category->parent) : '';

        if( !empty($category) ) {
            if ( !is_wp_error($category) )
                $templates[] = "category-{$category->slug}.php";

            $templates[] = "category-{$category->term_id}.php";
        }
    }

    $templates[] = "category.php";
    $template = locate_template($templates);

    return $template;
}
add_action('category_template', 'load_cat_parent_template');
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	   wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true );
	   wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/jquery.equalheights.min.js', false );


	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

?>