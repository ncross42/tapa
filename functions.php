<?php

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

function load_external_bootstrap() { 
	    wp_register_script( 'bootstrap', 'http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js', array('jquery'), 3.3, true); 
			    wp_enqueue_script('bootstrap'); 
}

function load_local_bootstrap() {
	    wp_register_script('bootstrap', get_bloginfo('template_url').'/js/bootstrap.min.js', __FILE__, array('jquery'), 3.3, true);
			    wp_enqueue_script('bootstrap'); 
}

?>
