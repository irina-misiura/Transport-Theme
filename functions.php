<?php

/*------------------------------------*\
	External Modules/Files
\*------------------------------------*/


/** Add Redux Framework */
include_once 'inc/loader.php' ;

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

if (!isset($content_width)) {
    $content_width = 900;
}

if (function_exists('add_theme_support')) {
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('large', 700, '', true); // Large Thumbnail
    add_image_size('medium', 250, '', true); // Medium Thumbnail
    add_image_size('small', 120, '', true); // Small Thumbnail
    add_image_size('blog-images', 1000, '', true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');
    add_image_size('blog-widget', 150, '', true);

    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('transport');
}

/*------------------------------------*\
	Functions
\*------------------------------------*/

// Transport Theme navigation
function transport_nav() {
	wp_nav_menu(
	array(
		'theme_location'  => 'header-menu',
		'menu_class'      => 'menu'
		)
	);
}

// Transport Theme navigation
function homepage_sidebar_nav() {
    wp_nav_menu(
    array(
        'theme_location'  => 'home-sidebar-menu',
        'menu_class'      => 'menu'
        )
    );
}

// Load Transport Theme scripts (header.php)
function transport_header_scripts() {
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    	wp_register_script('conditionizr', get_template_directory_uri() . '/assets/js/lib/conditionizr-4.3.0.min.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr');

        wp_register_script('modernizr', get_template_directory_uri() . '/assets/js/lib/modernizr-2.7.1.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr');

        wp_register_script('foundation', get_template_directory_uri() . '/assets/js/lib/foundation.min.js', array('jquery')); // Modernizr
        wp_enqueue_script('foundation'); 

        wp_register_script('slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery')); // Modernizr
        wp_enqueue_script('slick');

        wp_register_script('transportscripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '1.0.0'); // Custom scripts
        wp_enqueue_script('transportscripts');
    }
}

// Load Transport Theme conditional scripts
function transport_conditional_scripts() {
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/assets/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname');
    }
}

// Load Transport Theme styles
function transport_styles() {
    wp_register_style('normalize', get_template_directory_uri() . '/assets/css/normalize.min.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize');

    wp_register_style('foundation', get_template_directory_uri() . '/assets/css/foundation.min.css');
    wp_enqueue_style('foundation'); 

    // wp_register_style('foundation-flex', get_template_directory_uri() . '/assets/css/foundation-flex.css');
    // wp_enqueue_style('foundation-flex'); 

    wp_enqueue_style('dashicons'); 

    wp_register_style('slick', get_template_directory_uri() . '/assets/slick/slick.css');
    wp_enqueue_style('slick'); 

    wp_register_style('transport', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('transport');
}

function custom_upload_mimes ( $existing_mimes=array() ) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}
add_filter('upload_mimes', 'custom_upload_mimes');

// Register Transport Theme Navigation
function register_transport_menu() {
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'transport'), // Main Navigation
        'home-sidebar-menu' => __('Home Sidebar Menu', 'transport'), // Sidebar Navigation
        'extra-menu' => __('Extra Menu', 'transport') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '') {
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var) {
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist) {
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}

// Add page slug to body class, love this - Credit: Starkers Wordpress Theme
function add_slug_to_body_class($classes) {
    global $post;
    if (is_home()) {
        $key = array_search('blog', $classes);
        if ($key > -1) {
            unset($classes[$key]);
        }
    } elseif (is_page()) {
        $classes[] = sanitize_html_class($post->post_name);
    } elseif (is_singular()) {
        $classes[] = sanitize_html_class($post->post_name);
    }

    return $classes;
}

// If Dynamic Sidebar Exists
if (function_exists('register_sidebar')) {

    register_sidebar(array(
        'name' => __('Footer Widget 1', 'transport'),
        'id' => 'footer-widget-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 2', 'transport'),
        'id' => 'footer-widget-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Footer Widget 3', 'transport'),
        'id' => 'footer-widget-3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Newsletter Subscribe', 'transport'),
        'id' => 'newsletter-subscribe',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('Right Sidebar', 'transport'),
        'id' => 'right-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('Equipment Sidebar', 'transport'),
        'id' => 'equipment-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
    
    register_sidebar(array(
        'name' => __('Trackers Sidebar', 'transport'),
        'id' => 'trackers-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => __('Product Sidebar', 'transport'),
        'id' => 'product-sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

// Remove wp_head() injected Recent Comment styles
function my_remove_recent_comments_style() {
    global $wp_widget_factory;
    remove_action('wp_head', array(
        $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
        'recent_comments_style'
    ));
}

// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function transport_pagination() {
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type' => 'list',
        'prev_text' => '<',
        'next_text' => '>'
    ));
}

// Custom Excerpts
function transport_index($length) {// Create 20 Word Callback for Index page Excerpts, call using transport_excerpt('transport_index');
    return 50;
}

// Create 40 Word Callback for Custom Post Excerpts, call using transport_excerpt('transport_custom_post');
function transport_blog_widget($length) {
    return 20;
}

// Create the Custom Excerpts callback
function transport_excerpt($length_callback = '', $more_callback = '') {
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function transport_view_article($more) {
    global $post;
    return '... <span class="view-article"><a href="' . get_permalink($post->ID) . '">' . __('Подробнее', 'transport') . '</a></span>';
}

// Remove Admin bar
function remove_admin_bar() {
    return false;
}

function get_attachment_id_from_src ($image_src) {
    global $wpdb;
    $query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$image_src'";
    $id = $wpdb->get_var($query);
    return $id;

}

// Remove 'text/css' from our enqueued stylesheet
function transport_style_remove($tag) {
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function transportgravatar ($avatar_defaults) {
    $myavatar = get_template_directory_uri() . '/assets/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments() {
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function transportcomments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	extract($args, EXTR_SKIP);

	if ( 'div' == $args['style'] ) {
		$tag = 'div';
		$add_below = 'comment';
	} else {
		$tag = 'li';
		$add_below = 'div-comment';
	}
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
	<?php if ( 'div' != $args['style'] ) : ?>
	<div id="div-comment-<?php comment_ID() ?>" class="comment-body">
	<?php endif; ?>
	<div class="comment-author vcard">
	<?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
	<?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	</div>
<?php if ($comment->comment_approved == '0') : ?>
	<em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
	<br />
<?php endif; ?>

	<div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
		<?php
			printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
		?>
	</div>

	<?php comment_text() ?>

	<div class="reply">
	<?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
	</div>
	<?php if ( 'div' != $args['style'] ) : ?>
	</div>
	<?php endif; ?>
<?php }

/*------------------------------------*\
	Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('wp_enqueue_scripts', 'transport_styles'); // Add Theme Stylesheet
add_action('wp_enqueue_scripts', 'transport_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'transport_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('init', 'register_transport_menu'); // Add Transport Theme Menu
add_action('widgets_init', 'my_remove_recent_comments_style'); // Remove inline Recent Comment Styles from wp_head()
add_action('init', 'transport_pagination'); // Add our HTML5 Pagination

// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'transportgravatar'); // Custom Gravatar in Settings > Discussion
add_filter('body_class', 'add_slug_to_body_class'); // Add slug to body class (Starkers build)
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'transport_view_article'); // Add 'View Article' button instead of [...] for Excerpts
// add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'transport_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images

// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether

/*------------------------------------*\
    Slider
\*------------------------------------*/

function transport_register_custom_posts() {    
    $labels = array(
        'name'              => _x( 'Категории Продуктов', 'taxonomy general name' ),
        'singular_name'     => _x( 'Категория Продуктов', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все Категории Продуктов' ),
        'parent_item'       => __( 'Родительская Категория Продуктов' ),
        'parent_item_colon' => __( 'Родительская Категория Продуктов:' ),
        'edit_item'         => __( 'Редактировать Категорию Продуктов' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Новую' ),
        'new_item_name'     => __( 'Название Новой Категории Продуктов' ),
        'menu_name'         => __( 'Категория Продуктов' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product_category' ),
    );

    register_taxonomy( 'tr_product_category', array( 'tr_product' ), $args ); 
    
    $labels = array(
        'name'              => _x( 'Подкатегории Продуктов', 'taxonomy general name' ),
        'singular_name'     => _x( 'Подкатегория Продуктов', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все Подкатегории Продуктов' ),
        'parent_item'       => __( 'Родительская Подкатегория Продуктов' ),
        'parent_item_colon' => __( 'Родительская Подкатегория Продуктов:' ),
        'edit_item'         => __( 'Редактировать Подкатегорию Продуктов' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Новую' ),
        'new_item_name'     => __( 'Название Новой Подкатегории Продуктов' ),
        'menu_name'         => __( 'Подкатегория Продуктов' ),
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'product_subcategory' ),
    );

    register_taxonomy( 'tr_product_subcategory', array( 'tr_product' ), $args );

    $args = array(    
        'label' => __('Слайдер', 'transport'),    
        'singular_label' => __('Слайдер', 'transport'),    
        'public' => true,    
        'show_ui' => true,    
        'capability_type' => 'post',    
        'hierarchical' => false,    
        'rewrite' => true,
        'menu_icon' => 'dashicons-images-alt',
        'supports' => array('title', 'editor', 'thumbnail')
    );    
    register_post_type( 'transport_slider' , $args );  

    $args = array(    
        'label' => __('Слайдер Компаний', 'transport'),    
        'singular_label' => __('Слайдер Компаний', 'transport'),    
        'public' => true,    
        'show_ui' => true,    
        'capability_type' => 'post',    
        'hierarchical' => false,    
        'rewrite' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array('title', 'thumbnail')
    );    
    register_post_type( 'tr_companies_slider' , $args );  
  
    $labels = array(
        'name'              => _x( 'Продукты', 'taxonomy general name' ),
        'singular_name'     => _x( 'Продукт', 'taxonomy singular name' ),
        'search_items'      => __( 'Поиск' ),
        'all_items'         => __( 'Все Продукты' ),
        'parent_item'       => __( 'Родительский Продукт' ),
        'parent_item_colon' => __( 'Родительский Продукт:' ),
        'edit_item'         => __( 'Редактировать' ),
        'update_item'       => __( 'Обновить' ),
        'add_new_item'      => __( 'Добавить Новый' ),
        'add_new'          => __( 'Добавить Новый' ),
        'new_item_name'     => __( 'Название Нового Продукта' ),
        'menu_name'         => __( 'Продукты' ),
    );

    $args = array(    
        'label' => __('Продукты', 'transport'), 
        'labels' => $labels,    
        'singular_label' => __('Продукт', 'transport'),    
        'public' => true,    
        'show_ui' => true,    
        'capability_type' => 'post',    
        'hierarchical' => false,    
        'rewrite' => array('slug' => 'product'),
        'menu_icon' => 'dashicons-feedback',
        'supports' => array('title', 'editor', 'thumbnail'),
        'taxonomies' => array('tr_product_category', 'tr_product_subcategory')
    );    
    register_post_type( 'tr_product' , $args );    

} 
add_action('init', 'transport_register_custom_posts');  
add_action('admin_init', 'transport_register_custom_posts');    

function change_post_meta() {
    remove_meta_box( 'postimagediv', 'transport_slider', 'side' );
    add_meta_box( 'postimagediv', 'Изображение', 'post_thumbnail_meta_box', 'transport_slider', 'normal', 'high' );
    remove_meta_box( 'postimagediv', 'tr_companies_slider', 'side' );
    add_meta_box( 'postimagediv', 'Изображение', 'post_thumbnail_meta_box', 'tr_companies_slider', 'normal', 'high' );
}
add_action( 'do_meta_boxes', 'change_post_meta' );

function add_slider_images() {
    
    $args = array(
        'post_type' => 'transport_slider',
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC'
    );
    $output .= '<div class="transport-slider-wrap"><div class="transport-slider">';
    $slides = get_posts($args);
    if($slides):
        foreach($slides as $slide): 
            $slide_meta = get_post_meta($slide->ID);
            $attachment = get_the_post_thumbnail($slide->ID, 'slider-image');
            $attachment_id = get_post_thumbnail_id( $slide->ID );
            $slider_image = wp_get_attachment_image_src($attachment_id, 'slider-image');
            $output .= '<div>';
            if ($attachment_id) {
                $output .= '<div class="slide-img" style="background-image:url('.$slider_image[0].');">';
                $output .= '</div>';
            }
            if($slide->post_title || $slide->post_content) {
                $output .= '<div class="slide-text">';
            }
            if($slide->post_title) {
                $output .= '<h3 class="slider-title">';
                $output .= $slide->post_title;
                $output .= '</h3>';
            }
            if($slide->post_content) {
                // $output .= '<div class="slider-description-wrap">';
                if($slide_meta['slider-button-url'][0]) {
                    $output .= '<div class="slider-description with-btn">';
                    $output .= apply_filters('the_content', $slide->post_content);
                    $output .= '<a href="' . $slide_meta['slider-button-url'][0] . '" class="btn transparent-btn">' . $slide_meta['slider-button-text'][0] . '</a>';
                    $output .= '</div>';
                } else {
                    $output .= '<div class="slider-description">';
                    $output .= apply_filters('the_content', $slide->post_content);
                    $output .= '</div>';
                }
                // $output .= '</div>';
            }
            if($slide->post_title || $slide->post_content) {
                $output .= '</div>';
            }
            $output .= '</div>';
        endforeach;
    endif;
    $output .= '</div></div>';
    return $output; 
}
add_shortcode('transport_slider', 'add_slider_images');


function add_companies_slider() {
    
    $args = array(
        'post_type' => 'tr_companies_slider',
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC'
    );
    $output .= '<div class="transport-companies-slider-wrap"><div class="transport-companies-slider">';
    $slides = get_posts($args);
    if($slides):
        foreach($slides as $slide): 
            $slide_meta = get_post_meta($slide->ID);
            $attachment = get_the_post_thumbnail($slide->ID, 'slider-image');
            $attachment_id = get_post_thumbnail_id( $slide->ID );
            $slider_image = wp_get_attachment_image_src($attachment_id, 'slider-image');
            $output .= '<div>';
            if ($attachment_id) {
                $output .= '<div class="slide-img">';
                $output .= '<img src="'.$slider_image[0].'"/>';
                $output .= '</div>';
            }
            $output .= '</div>';
        endforeach;
    endif;
    $output .= '</div></div>';
    return $output; 
}
add_shortcode('transport_companies_slider', 'add_companies_slider');

?>
