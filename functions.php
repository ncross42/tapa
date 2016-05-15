<?php

define( 'ASSETS_URL', get_stylesheet_directory_uri().DIRECTORY_SEPARATOR.'assets'.DIRECTORY_SEPARATOR );

/*
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

$get_the_url = 'http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js';
$cdnIsUp = get_transient( 'cnd_is_up' );
if ( $cdnIsUp ) {
	$load_source = 'load_external_bootstrap';
} else {
	$cdn_response = wp_remote_get( $get_the_url );
	if( is_wp_error( $cdn_response ) || wp_remote_retrieve_response_code($cdn_response) != '200' ) {
		$load_source = 'load_local_bootstrap';
	}
	else {
		$cdnIsUp = set_transient( 'cnd_is_up', true, MINUTE_IN_SECONDS * 20 );
		$load_source = 'load_external_bootstrap';
	}
}
add_action('wp_enqueue_scripts', $load_source );
*/

add_action('wp_enqueue_scripts', 'load_bootstrap_local' );
function load_bootstrap_external() { 
	#wp_enqueue_script('bootstrap-js', 'http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), 3.3, true); 
	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', array('jquery'), 3.3, true); 
	wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-css-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css' );
}
function load_bootstrap_local() {
	wp_enqueue_script('bootstrap-js', ASSETS_URL.'bootstrap-3.3.6-dist/js/bootstrap.min.js', __FILE__, array('jquery'), 3.3, true);
	wp_enqueue_style( 'bootstrap-css', ASSETS_URL.'bootstrap-3.3.6-dist/css/bootstrap.min.css' );
	wp_enqueue_style( 'bootstrap-css-theme', ASSETS_URL.'bootstrap-3.3.6-dist/css/bootstrap.min.css' );
}

?>
