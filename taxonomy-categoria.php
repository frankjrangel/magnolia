<?php get_header(); ?>
<script type="text/javascript">
  $( "#catalogo" ).addClass("current_page");
  $( ".titulo" ).addClass("catalogo");
  $( ".titulo p" ).html("CATÁLOGO");
</script>

<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  $loop = new WP_Query( array(
    'post_type' => 'producto',
    'paged' => $paged,
    'orderby' => 'title',
    'order' => 'ASC',

  	'tax_query' => array(
    		array(
    			'taxonomy' => 'categoria',
    			'field'    => 'id',
          'terms'    => $_GET["t"],
    		),
    	),
  ) );
  $total_pages = $loop->max_num_pages;
?>

<?php
  $term_id = $_GET["t"] ;
  $term = get_term_by( 'id', $term_id , 'categoria');
  $term_link = get_term_link($term);
  $term_name = $term->name;
?>

<div class="seccion">
  <div class="nav_categoria">
    <div class="row">
      <div class="col-xs-12 col-sm-7">
        <ol class="breadcrumb">
          <li><a href="<?php echo get_page_link(50); ?>">CATÁLOGO</a></li>
          <li id="activa"><a href="<?php echo $term_link.'?t='.$term_id; ?>"><?php echo $term_name; ?></a></li>
        </ol>
      </div>
      <div class="col-xs-12 col-sm-5">
        <?php if ($total_pages > 1): ?>

          <div class="pags">
            <?php if ($total_pages > 2): ?>
              <?php if( $paged == '1' ): ?>
                <span class="page-numbers current">1</span>
                <a class="page-numbers"
                  href="<?php echo $term_link.'page/2/?t='.$term_id; ?>">2</a>
                <a class="page-numbers"
                  href="<?php echo $term_link.'page/3/?t='.$term_id; ?>">3</a>
              <?php next_posts_link( '<span class="prev_next">></span>' , $total_pages ); ?>
              <?php elseif ( $paged == $total_pages ): ?>
                <?php previous_posts_link( '<span class="prev_next"><</span>' , $total_pages); ?>
                    <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged-2).'/?t='.$term_id; ?>"><?php echo $paged-2; ?></a>
                  <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged-1).'/?t='.$term_id; ?>"><?php echo $paged-1; ?></a>
                  <span class="page-numbers current"><?php echo $paged; ?></span>
                <?php else : ?>
                <?php previous_posts_link( '<span class="prev_next"><</span>' , $total_pages); ?>
                    <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged-1).'/?t='.$term_id; ?>"><?php echo $paged-1; ?></a>
                  <span class="page-numbers current"><?php echo $paged; ?></span>
                  <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged+1).'/?t='.$term_id; ?>"><?php echo $paged+1; ?></a>
                   <?php next_posts_link( '<span class="prev_next">></span>' , $total_pages ); ?>
               <?php endif; ?>
            <?php else : ?>
              <?php if( $paged == '1' ): ?>
                    <span class="page-numbers current">1</span>
                  <a class="page-numbers"
                    href="<?php echo $term_link.'page/2/?t='.$term_id; ?>">2</a>
                <?php else : ?>
                    <a class="page-numbers"
                    href="<?php echo $term_link.'page/1/?t='.$term_id; ?>">1</a>
                  <span class="page-numbers current">2</span>
                <?php endif; ?>
            <?php endif; ?>
          </div>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<div class="seccion">
  <div class="row">
    <div class="col-xs-12">
      <div class="productos">
        <div class="row">

          <?php if ( $loop->have_posts() ) : while ( $loop->have_posts() ) :    $loop->the_post();
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

          <?php endwhile; wp_reset_query(); else: ?>
            <div class="seccion">
              <div class="row">
                <div class="col-xs-10 col-xs-offset-1">
                  <h1>Muy pronto vendrán en esta sección gift especiales para ti...</h1>
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="seccion pags_movil">
  <div class="nav_categoria">
    <div class="row">
      <div class="col-xs-12">
        <?php if ($total_pages > 1): ?>

          <div class="pags">
            <?php if ($total_pages > 2): ?>
              <?php if( $paged == '1' ): ?>
                <span class="page-numbers current">1</span>
                <a class="page-numbers"
                  href="<?php echo $term_link.'page/2/?t='.$term_id; ?>">2</a>
                <a class="page-numbers"
                  href="<?php echo $term_link.'page/3/?t='.$term_id; ?>">3</a>
              <?php next_posts_link( '<span class="prev_next">></span>' , $total_pages ); ?>
              <?php elseif ( $paged == $total_pages ): ?>
                <?php previous_posts_link( '<span class="prev_next"><</span>' , $total_pages); ?>
                    <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged-2).'/?t='.$term_id; ?>"><?php echo $paged-2; ?></a>
                  <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged-1).'/?t='.$term_id; ?>"><?php echo $paged-1; ?></a>
                  <span class="page-numbers current"><?php echo $paged; ?></span>
                <?php else : ?>
                <?php previous_posts_link( '<span class="prev_next"><</span>' , $total_pages); ?>
                    <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged-1).'/?t='.$term_id; ?>"><?php echo $paged-1; ?></a>
                  <span class="page-numbers current"><?php echo $paged; ?></span>
                  <a class="page-numbers"
                    href="<?php echo $term_link.'page/'.($paged+1).'/?t='.$term_id; ?>"><?php echo $paged+1; ?></a>
                   <?php next_posts_link( '<span class="prev_next">></span>' , $total_pages ); ?>
               <?php endif; ?>
            <?php else : ?>
              <?php if( $paged == '1' ): ?>
                    <span class="page-numbers current">1</span>
                  <a class="page-numbers"
                    href="<?php echo $term_link.'page/2/?t='.$term_id; ?>">2</a>
                <?php else : ?>
                    <a class="page-numbers"
                    href="<?php echo $term_link.'page/1/?t='.$term_id; ?>">1</a>
                  <span class="page-numbers current">2</span>
                <?php endif; ?>
            <?php endif; ?>
          </div>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>
