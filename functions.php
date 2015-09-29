<?php

function wpbootstrap_scripts_with_jquery(){
	//CDN and non CDN scripts MUST hace different names.
	$scripts_CDN = array(
		'script0' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
		'script1' => 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
		'script2' => 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
		'script3' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.6.0/jquery.matchHeight-min.js'
		);
	foreach( $scripts_CDN as $key=>$sc ){
		wp_register_script( $key , $sc , array('jquery'));
		wp_enqueue_script( $key );
	}

	$scripts = array(
		'scriptA' => '/js/init.js',
		'scriptB' => '/js/menuFixed.js'
		);
	foreach( $scripts as $key=>$sc ){
		wp_register_script( $key , get_template_directory_uri() . $sc , array('jquery'));
		wp_enqueue_script( $key );
	}

}
add_action( 'wp_enqueue_scripts' , 'wpbootstrap_scripts_with_jquery' );

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes','cc_mime_types');
