<?php get_header(); ?>
<script type="text/javascript">
  $( "#catalogo" ).addClass("current_page");
  $( ".titulo" ).addClass("catalogo");
  $( ".titulo p" ).html("CATÁLOGO");
</script>

<?php $loop = new WP_Query( array(
    'post_type' => 'producto',
    'orderby' => 'title',
    'order' => 'ASC',

  	'tax_query' => array(
    		array(
    			'taxonomy' => 'categoria',
    			'field'    => 'id',
          'terms'    => $_GET["t"].''
    		),
    	),
  ) );
?>

<?php
  $term_id = $_GET["t"] ;
  $term = get_term_by( 'id', $term_id , 'categoria');
  $term_link = get_term_link($term);
  $term_name = substr($term->name, 4);
?>

<div class="seccion">
  <ol class="breadcrumb">
    <li><a href="<?php echo get_page_link(50); ?>">CATÁLOGO</a></li>
    <li id="activa"><a href="<?php echo $term_link.'?t='.$term_id; ?>"><?php echo $term_name; ?></a></li>
  </ol>
</div>

<div class="seccion">
  <div class="row">
    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
      <div class="productos">
        <div class="row">

          <?php while ( $loop->have_posts() ) : $loop->the_post();
            $link = get_permalink();
            $foto_1 = get_field('foto_1');
            $foto_2 = get_field('foto_2');
            $nombre = get_field('nombre');
            $precio = get_field('precio');
            $detalles = substr(get_field('detalles'), 0 , 50 );
            $det_ultimo_char = substr( $detalles , -1 );
            while( $det_ultimo_char != ' ' ){
              $detalles = substr( $detalles , 0 , -1 );
              $det_ultimo_char = substr( $detalles , -1 );
            }
            $detalles = substr( $detalles , 0 , -1 );
          ?>


          <div class="cols col-xs-6 col-sm-4 col-md-3">
             <div class="producto-tarjeta">
               <div class="producto-data sh">
                 <div class="producto-img">
                   <a href="<?php echo $link.'?t='.$term_id; ?>" style="background-image:
                        url(<?php echo $foto_1; ?>);">
                   </a>
                   <a href="<?php echo $link.'?t='.$term_id; ?>" style="background-image:
                        url(<?php echo $foto_2; ?>);">
                   </a>
                 </div>
                 <div class="producto-info">
                   <h5><?php echo $nombre; ?></h5>
                   <p><?php echo $detalles.'...'; ?></p>
                   <?php //<p>Bs. echo $precio; </p> ?>
                 </div>
               </div>
             </div>
          </div>

          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
