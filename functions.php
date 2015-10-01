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

// ===== Post Types =====

/*function red_post_type() {
  $labels = array(
    'name'               => _x( 'Redes', 'post type general name' ),
    'singular_name'      => _x( 'Red', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'Red' ),
    'add_new_item'       => __( 'Agregar Red' ),
    'edit_item'          => __( 'Editar Red' ),
    'new_item'           => __( 'Nuevo Red' ),
    'all_items'          => __( 'Todos las redes' ),
    'view_item'          => __( 'Ver Red' ),
    'search_items'       => __( 'Buscar Red' ),
    'not_found'          => __( 'La Red no existe' ),
    'not_found_in_trash' => __( 'La Red no existe en la papelera' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Redes'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Redes',
    'public'        => true,
    'menu_position' => 4,
    'supports'      => array(  'title' , 'page-attributes'  ),
    'has_archive'   => true
  );
  register_post_type( 'red', $args );
}
add_action( 'init', 'red_post_type' );*/

function preguntas_y_consejos_post_type() {
  $labels = array(
    'name'               => 'Preguntas y Consejos',
    'singular_name'      => 'Pregunta o Consejo',
  );
  $args = array(
    'labels'        => $labels,
    'public'        => true,
    //'menu_position' => 4,
    'has_archive'   => true
  );
  register_post_type( 'preguntas_y_consejos', $args );
}
add_action( 'init', 'preguntas_y_consejos_post_type' );
