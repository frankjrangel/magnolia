<?php
if ( !is_admin() ){

	function wpbootstrap_scripts_with_jquery(){
		//CDN and non CDN scripts MUST hace different names.
		global $wp_scripts;
		wp_deregister_script( 'jquery' );

		if ( $is_IE ){
			wp_register_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), null , false );
			$wp_scripts->add_data( 'jquery' , 'conditional' , 'lt IE 9');
			wp_enqueue_script( 'jquery' );

			wp_register_script( 'jquery_214' , 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null , false );
			$wp_scripts->add_data( 'jquery' , 'conditional' , 'gte IE 9');
			wp_enqueue_script( 'jquery' );
		}
		else {
			wp_register_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null , false );
			wp_enqueue_script( 'jquery' );
		}

		$conditional_polyfills_CDN = array(
			'scriptP1' => 'http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js'
			);
		foreach( $conditional_polyfills_CDN as $key=>$sc ){
			wp_register_script( $key , $sc , array(), null , false );
			$wp_scripts->add_data( $key , 'conditional' , 'lt IE 9');
			wp_enqueue_script( $key );
		}

		$conditional_polyfills = array(
			'scriptPA' => '/js/html5shiv.min.js',
			'scriptPB' => '/js/PIE.js'
			);
		foreach( $conditional_polyfills as $key=>$sc ){
			wp_register_script( $key , get_template_directory_uri() . $sc , array(), null , false );
			$wp_scripts->add_data( $key , 'conditional' , 'lt IE 9');
			wp_enqueue_script( $key );
		}

		$scripts_CDN = array(
			'script1' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
			'script2' => 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
			'script3' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.6.0/jquery.matchHeight-min.js'
			);
		foreach( $scripts_CDN as $key=>$sc ){
			wp_register_script( $key , $sc , array('jquery'));
			wp_enqueue_script( $key );
		}

		$scripts = array(
			'scriptA' => '/js/init.js',
			'scriptB' => '/js/menuFixed.js',
			'scriptC' => '/js/bumper.js',
			'scriptD' => '/js/supportsSVG.js',
			'scriptE' => '/js/slider.js'
			);
		foreach( $scripts as $key=>$sc ){
			wp_register_script( $key , get_template_directory_uri() . $sc , array('jquery'));
			wp_enqueue_script( $key );
		}
	}
	add_action( 'wp_print_scripts' , 'wpbootstrap_scripts_with_jquery' );
}

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes','cc_mime_types');


// ===== Post Types =====

/*
	EJEMPLO FULL DATA

	function nombre_post_type() {
	  $labels = array(
	    'name'               => 'Nombres',
	    'singular_name'      => 'Nombre',
			'all_items'          => 'Todos',
			'add_new'            => 'Agregar Nuevo',
			'add_new_item'       => 'Agregar Nuevo',
			'edit_item'          => 'Editar',
			'new_item'           => 'Nuevo',
			'view_item'          => 'Ver',
			'search_items'       => 'Buscar',
			'not_found'          => 'No existe',
	    'not_found_in_trash' => 'No existe',
	    'parent_item_colon'  => ' ',
	    'menu_name'          => 'Nombres'// o apunta a name
	  );
	  $args = array(
	    'labels'        => $labels,
	    'description'   => 'Nombres',
	    'public'        => true,
	    'menu_position' => 4,
			'menu_icon'     => 'dashicons-cart',
	    'supports'      => array(  'title' , 'page-attributes'  ),
	    'has_archive'   => true
	  );
	  register_post_type( 'nombre', $args );
	}
	add_action( 'init', 'nombre_post_type' );
*/


function producto_post_type() {
  $labels = array(
    'name'               => 'Catálogo',
    'singular_name'      => 'Producto',
		'all_items'          => 'Productos',
		'add_new'            => 'Agregar Nuevo',
		'add_new_item'       => 'Agregar Nuevo',
		'edit_item'          => 'Editar ',
		'new_item'           => 'Nuevo',
		'view_item'          => 'Ver',
		'search_items'       => 'Buscar',
  );
  $args = array(
    'labels'        	=> $labels,
    'public'        	=> true,
    'menu_position' 	=> 2,
		'menu_icon'   		=> 'dashicons-screenoptions',
		'supports'      	=> array( 'title' , 'page-attributes' ),
    'has_archive'   	=> true
  );
  register_post_type( 'producto', $args );
}
add_action( 'init', 'producto_post_type' );

function categoria_producto_taxonomy() {
    $labels = array(
          'name' 						=> 'Categorías',
					'singular_name'		=> 'Categoría',
          'add_new_item' 		=> 'Agregar categoría',
          'new_item_name' 	=> "Nueva categoría"
    );
    $args = array(
            'labels'            => $labels,
            'rewrite'           => array( 'slug' => 'categoria' ),
            'show_admin_column' => 1,
    );
    register_taxonomy( 'categoria', 'producto', $args );
    register_taxonomy_for_object_type( 'categoria', 'producto' );
}
add_action( 'init', 'categoria_producto_taxonomy', 0 );

function pregunta_post_type() {
  $labels = array(
    'name'               => 'Preguntas',
    'singular_name'      => 'Pregunta',
		'all_items'          => 'Todas',
		'add_new'            => 'Agregar Nueva',
		'add_new_item'       => 'Agregar Nueva',
		'edit_item'          => 'Editar',
		'new_item'           => 'Nueva',
		'view_item'          => 'Ver',
		'search_items'       => 'Buscar',
		'not_found'          => 'No existe',
    'not_found_in_trash' => 'No existe',
    'parent_item_colon'  => ' ',
  );
  $args = array(
    'labels'        => $labels,
    'public'        => true,
    'menu_position' => 3,
		'menu_icon'   => 'dashicons-format-status',
		'supports'      => array( 'title' , 'page-attributes' ),
    'has_archive'   => true
  );
  register_post_type( 'pregunta', $args );
}
add_action( 'init', 'pregunta_post_type' );

function consejo_post_type() {
  $labels = array(
    'name'               => 'Consejos',
    'singular_name'      => 'Consejo',
		'all_items'          => 'Todos',
		'add_new'            => 'Agregar Nuevo',
		'add_new_item'       => 'Agregar Nuevo',
		'edit_item'          => 'Editar',
		'new_item'           => 'Nuevo',
		'view_item'          => 'Ver',
		'search_items'       => 'Buscar',
		'not_found'          => 'No existe',
    'not_found_in_trash' => 'No existe',
    'parent_item_colon'  => ' ',
  );
  $args = array(
    'labels'        => $labels,
    'public'        => true,
    'menu_position' => 4,
		'menu_icon'   	=> 'dashicons-testimonial',
		'supports'      => array( 'title' , 'page-attributes' ),
    'has_archive'   => true
  );
  register_post_type( 'consejo', $args );
}
add_action( 'init', 'consejo_post_type' );

function paso_post_type() {
  $labels = array(
    'name'               => 'Pasos',
    'singular_name'      => 'Paso',
		'all_items'          => 'Todos',
		'add_new'            => 'Agregar Nuevo',
		'add_new_item'       => 'Agregar Nuevo',
		'edit_item'          => 'Editar',
		'new_item'           => 'Nuevo',
		'view_item'          => 'Ver',
		'search_items'       => 'Buscar',
		'not_found'          => 'No existe',
    'not_found_in_trash' => 'No existe',
    'parent_item_colon'  => ' ',
  );
  $args = array(
    'labels'        => $labels,
    'public'        => true,
    'menu_position' => 5,
		'menu_icon'   	=> 'dashicons-editor-ol',
		'supports'      => array( 'title' , 'page-attributes' ),
    'has_archive'   => true
  );
  register_post_type( 'paso', $args );
}
add_action( 'init', 'paso_post_type' );

function slide_post_type() {
	$labels = array(
		'name'               => 'Gente Magnolia',
		'singular_name'      => 'Testimonio',
		'all_items'          => 'Todos',
		'add_new'            => 'Agregar Nuevo',
		'add_new_item'       => 'Agregar Nuevo',
		'edit_item'          => 'Editar',
		'new_item'           => 'Nuevo',
		'view_item'          => 'Ver',
		'search_items'       => 'Buscar',
		'not_found'          => 'No existe',
		'not_found_in_trash' => 'No existe',
		'parent_item_colon'  => ' ',
		'menu_name'          => 'Gente Magnolia'// o apunta a name
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Gente Magnolia',
		'public'        => true,
		'menu_position' => 6,
		'menu_icon'     => 'dashicons-image-flip-horizontal',
		'supports'      => array(  'title' , 'page-attributes'  ),
		'has_archive'   => true
	);
	register_post_type( 'slide', $args );
}
add_action( 'init', 'slide_post_type' );

/* ==== REMOVING =====

function wpse28782_remove_plugin_admin_menu() {
    if( !current_user_can( 'administrator' ) ):
        remove_menu_page('cart66_admin');
    endif;
}
add_action( 'admin_menu', 'wpse28782_remove_plugin_admin_menu', 9999 );

function wpse28782_remove_menu_items() {
    if( !current_user_can( 'administrator' ) ):
        remove_menu_page( 'edit.php?post_type=your_post_type' );
    endif;
}
add_action( 'admin_menu', 'wpse28782_remove_menu_items' );


remove_menu_page('edit.php'); // Posts
remove_menu_page('upload.php'); // Media
remove_menu_page('link-manager.php'); // Links
remove_menu_page('edit-comments.php'); // Comments
remove_menu_page('edit.php?post_type=page'); // Pages
remove_menu_page('plugins.php'); // Plugins
remove_menu_page('themes.php'); // Appearance
remove_menu_page('users.php'); // Users
remove_menu_page('tools.php'); // Tools
remove_menu_page('options-general.php'); // Settings
*/

// ==== REMOVES =====

function wpse28782_remove_menu_items() {
	remove_menu_page('edit.php'); // Posts
	remove_menu_page('edit-comments.php'); // Comments
	remove_menu_page('themes.php'); // Appearance
	remove_menu_page('tools.php'); // Tools

}
add_action( 'admin_menu', 'wpse28782_remove_menu_items' );


function exclude_this_page( $query ) {
	global $pagenow;
	if( 'edit.php' == $pagenow && ( get_query_var('post_type') && 'page' == get_query_var('post_type') ) )
		$query->set( 'post__not_in', array(
			50, //CATALOGO
			151 //PREGUNTAS Y TIPS
		) );


	return $query;
}
add_action( 'pre_get_posts' ,'exclude_this_page' );
