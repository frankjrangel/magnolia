<?php get_header(); ?>
<script type="text/javascript">
  $( "#que_ofrecemos" ).addClass("current_page");
  $( ".titulo" ).addClass("que_ofrecemos");
  $( ".titulo p" ).html("¿QUÉ OFRECEMOS?");
</script>
<?php $taxonomy = 'categoria';
      $term_id  = '14';
      $term = get_term_by( 'id' , $term_id , $taxonomy );
      $link = esc_attr(get_term_link($term)). '?t='.$term_id;
      $foto_1200 = get_field('banner_1200', 10 );
      $foto_992 = get_field('banner_992', 10 );
      $foto_768 = get_field('banner_768', 10 );
      $redes = get_field('banner-redes');
      $foto = get_field('banner-productos');
      $p_1 = get_field('otro_producto_1');
      $p_2 = get_field('otro_producto_2');
      $p_3 = get_field('otro_producto_3');
      $link_1 = esc_url( get_permalink($p_1->ID) );
      $link_2 = esc_url( get_permalink($p_2->ID) );
      $link_3 = esc_url( get_permalink($p_3->ID) );
      $foto_1_1 = get_field('foto_1', $p_1->ID);
      $foto_2_1 = get_field('foto_1', $p_2->ID);
      $foto_3_1 = get_field('foto_1', $p_3->ID);
      $foto_1_2 = get_field('foto_2', $p_1->ID);
      $foto_2_2 = get_field('foto_2', $p_2->ID);
      $foto_3_2 = get_field('foto_2', $p_3->ID);
      $nombre_1 = get_field('nombre', $p_1->ID);
      $nombre_2 = get_field('nombre', $p_2->ID);
      $nombre_3 = get_field('nombre', $p_3->ID);
?>

<div class="seccion intro">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <img class="img-responsive"
          src="/magnolia/wp-content/themes/magnolia/assets/img/que_ofrecemos/que_ofrecemos.svg"  alt="¿Qué ofrecemos?">
    </div>
    <div class="col-xs-10 col-xs-offset-1">
      <p><?php echo get_field('que_ofrecemos'); ?></p>
    </div>
  </div>
</div>
<div class="seccion shortcuts-que_ofrecemos">
  <div class="row">
    <div class="col-xs-12">
      <div class="shortcut-2">
        <a href="<?php echo get_page_link(10); ?>" class="sh"><p>¿Cómo pedir?</p></a>
      </div>
      <div class="shortcut-2">
        <a href="<?php echo get_page_link(50); ?>" class="sh"><p>Ver Catálogo</p></a>
      </div>
    </div>
  </div>
</div>
<div class="seccion banner-pedir_768">
  <div class="banner">
    <a href="<?php echo get_page_link(10); ?>">
        <img class="img-responsive"
            src="<?php echo $foto_768; ?>"  alt="¿Comó pedir?">
    </a>
  </div>
</div>
<div class="seccion banner-pedir_992">
  <div class="banner">
    <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_992; ?>"  alt="¿Comó pedir?">
    </a>
  </div>
</div>
<div class="seccion banner-pedir_1200">
  <div class="banner">
    <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_1200; ?>"  alt="¿Comó pedir?">
    </a>
  </div>
</div>
<div class="seccion banner-productos">
    <div class="row">
      <div class="prod_0 col-xs-12 col-sm-5 col-md-4">
        <a href="<?php echo $link; ?>">
          <img class="img-responsive"
              src="<?php echo $foto; ?>"  alt="Productos del mes">
        </a>
      </div>
      <div class="col-sm-7 col-md-8">
        <div class="otros_productos-titulo">
          <div style="background-image:     url(/magnolia/wp-content/themes/magnolia/assets/img/que_ofrecemos/otros_productos.svg);">

          </div>
        </div>
        <div class="otros_productos">
          <div class="row">
            <div class="prod_1 col-sm-6 col-md-4">
              <a href="<?php echo $link_1; ?>"
                 title="<?php echo $nombre_1; ?>"
                 style="background-image:
                   url(<?php echo $foto_1_1; ?>);">
              </a>
              <a href="<?php echo $link_1; ?>"
                 title="<?php echo $nombre_1; ?>"
                 style="background-image:
                   url(<?php echo $foto_1_2; ?>);">
              </a>
            </div>
            <div class="prod_2 col-sm-6 col-md-4">
              <a href="<?php echo $link_2; ?>"
                 title="<?php echo $nombre_2; ?>"
                 style="background-image:
                   url(<?php echo $foto_2_1; ?>);">
              </a>
              <a href="<?php echo $link_2; ?>"
                 title="<?php echo $nombre_2; ?>"
                 style="background-image:
                   url(<?php echo $foto_2_2; ?>);">
              </a>
            </div>
            <div class="prod_3 col-md-4">
              <a href="<?php echo $link_3; ?>"
                 title="<?php echo $nombre_3; ?>"
                 style="background-image:
                   url(<?php echo $foto_3_1; ?>);">
              </a>
              <a href="<?php echo $link_3; ?>"
                 title="<?php echo $nombre_3; ?>"
                 style="background-image:
                   url(<?php echo $foto_3_2; ?>);">
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="seccion banner-redes">
  <div class="row">
    <div class="col-xs-12">
      <div class="banner">
        <a href="#">
          <img class="img-responsive"
              src="<?php echo $redes ?>"  alt="Redes">
        </a>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
