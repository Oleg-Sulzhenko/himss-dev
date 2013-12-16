<?php

/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li>
        <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
            <header class="comment-author vcard">
                <?php echo get_avatar($comment, $size = '48', $default = '<path_to_url>'); ?>
                <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
                <time><a href="<?php echo htmlspecialchars(get_comment_link($comment->comment_ID)) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(), get_comment_time()) ?></a></time>
                <?php edit_comment_link(__('(Edit)'), '  ', '') ?>
            </header>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><?php _e('Your comment is awaiting moderation.') ?></em>
                <br />
            <?php endif; ?>

            <?php comment_text() ?>

            <nav>
                <?php comment_reply_link(array_merge($args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
            </nav>
        </article>
        <!-- </li> is added by wordpress automatically -->
        <?php
    }

    automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
    if (function_exists('register_sidebar')) {
        register_sidebar(array(
            'before_widget' => '<section>',
            'after_widget' => '</section>',
            'before_title' => '<h2 class="widgettitle">',
            'after_title' => '</h2>',
        ));
    }

// Custom Functions for CSS/Javascript Versioning
    $GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url') . "/";
    $GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
    function versioned_stylesheet($relative_url, $add_attributes = "") {
        echo '<link rel="stylesheet" href="' . versioned_resource($relative_url) . '" ' . $add_attributes . '>' . "\n";
    }

// Add ?v=[last modified time] to javascripts
    function versioned_javascript($relative_url, $add_attributes = "") {
        echo '<script src="' . versioned_resource($relative_url) . '" ' . $add_attributes . '></script>' . "\n";
    }

// Add ?v=[last modified time] to a file url
    function versioned_resource($relative_url) {
        $file = $_SERVER["DOCUMENT_ROOT"] . $relative_url;
        $file_version = "";

        if (file_exists($file)) {
            $file_version = "?v=" . filemtime($file);
        }

        return $relative_url . $file_version;
    }

    function wptuts_scripts_basic() {
        // Register the script like this for a theme:
        wp_register_script('jquery.colorbox-min', get_template_directory_uri() . '/html5-boilerplate/js/vendor/jquery.colorbox-min.js', array('jquery'));
        wp_register_script('tabulous.min', get_template_directory_uri() . '/html5-boilerplate/js/vendor/tabulous.min.js', array('jquery'));
        // For either a plugin or a theme, you can then enqueue the script:
        wp_enqueue_script('jquery.colorbox-min');
        wp_enqueue_script('tabulous.min');
    }

    add_action('wp_enqueue_scripts', 'wptuts_scripts_basic');

    function my_formatter($content) {
        $new_content = '';
        $pattern_full = '{(\[raw\].*?\[/raw\])}is';
        $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
        $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

        foreach ($pieces as $piece) {
            if (preg_match($pattern_contents, $piece, $matches)) {
                $new_content .= $matches[1];
            } else {
                $new_content .= wptexturize(wpautop($piece));
            }
        }

        return $new_content;
    }

    remove_filter('the_content', 'wpautop');
    remove_filter('the_content', 'wptexturize');

    add_filter('the_content', 'my_formatter', 99);


    add_theme_support('post-thumbnails', array('post', 'page', 'himms_events'));


    add_action('pre_get_posts', 'my_pre_get_posts');
 
    
function my_pre_get_posts( $query )
{
	// validate
	if( is_admin() )
	{
		return $query;
	}
 
    // project example
    if( isset($query->query_vars['post_type']) && $query->query_vars['post_type'] == 'himms_events' )
    {
    	$query->set('orderby', 'meta_value_num');  
    	$query->set('meta_key', 'start_date2');  
    	$query->set('order', 'ASC'); 
    }   
 
	// always return
	return $query;
 
}

the_excerpt_max_charlength(30);

function the_excerpt_max_charlength($charlength) {
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
		echo ' ...';
	} else {
		echo $excerpt;
	}
}


?>