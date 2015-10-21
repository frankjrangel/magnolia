<?php get_header(); ?>
<div class="seccion heading">
  <div class="collapsed" data-toggle="collapse" data-target="#collapse-menu">
    <div class="row">
      <div class="col-xs-12">
        <div class="titulo catalogo">
          <p>CATÁLOGO</p>
        </div>
        <div class="categoria">
          <p><?php echo substr(get_term_by( 'id', $_GET["t"].'' , 'categoria')->name, 4); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

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
<div class="seccion">
  <div class="row">
    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
      <div class="productos">
        <div class="row">

          <?php while ( $loop->have_posts() ) : $loop->the_post();
            $link = get_permalink();
            $foto = get_field('foto_1');
            $nombre = get_field('nombre');
            $precio = get_field('precio');
          ?>


          <div class="cols col-xs-6 col-sm-4 col-md-3">
            <a href="<?php echo $link; ?>">
             <div class="producto-tarjeta">
               <div class="producto-data sh">
                 <img class="img-responsive"
                     src="<?php echo $foto; ?>">
                 <div class="producto-info">
                   <h5><?php echo $nombre; ?></h5>
                   <?php //<p>Bs. echo $precio; </p> ?>
                 </div>
               </div>
             </div>
            </a>
          </div>

          <?php endwhile; wp_reset_query(); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
