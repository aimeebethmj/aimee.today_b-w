<?php

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails' );

// a handy function to "console.log" PHP data
function consoleLog($data, $function) 
{
	if (is_array($data) || is_object($data)) $data = json_encode($data);
	else if (is_string($data)) $data = '"' . $data . '"';

	if (!$function) $function = 'log';
	
	echo('<script>console.' . $function . '(' . $data . ');</script>');
}

// let's give a proper name to the function to print the active theme's folder
function theActiveThemeDirectory()
{
	$directory = get_template_directory_uri() . '/';
	print $directory;
}

// from http://php.net/manual/en/function.file-exists.php#103436
function fileExists($path)
{
    return (@fopen($path, 'r') == true);
}

// from https://codex.wordpress.org/Customizing_the_Read_More
function modify_read_more_link() {
    return '<b><a class="more-link" href="' . get_permalink() . '">Read more +</a></b>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 200, 250, true );

// from https://developer.wordpress.org/reference/functions/comments_template/
// function comments_template( $file = '/comments.php', $separate_comments = false ) {
//     global $wp_query, $withcomments, $post, $wpdb, $id, $comment, $user_login, $user_ID, $user_identity, $overridden_cpage;
 
//     if ( !(is_single() || is_page() || $withcomments) || empty($post) )
//         return;
 
//     if ( empty($file) )
//         $file = '/comments.php';
 
//     $req = get_option('require_name_email');


?>