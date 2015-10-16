<?php get_header(); ?>
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
      $foto_1 = get_field('foto_1', $p_1->ID);
      $foto_2 = get_field('foto_1', $p_2->ID);
      $foto_3 = get_field('foto_1', $p_3->ID);
?>

<div class="heading">
  <div class="row">
    <div class="col-xs-12">
      <div class="titulo que_ofrecemos">
        <p>¿QUÉ OFRECEMOS?</p>
      </div>
    </div>
  </div>
</div>
<div class="seccion intro">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
      <p><?php echo get_field('que_ofrecemos'); ?></p>
    </div>
  </div>
</div>
<div class="seccion shortcuts">
  <div class="row">
    <div class="col-xs-12">
      <div class="shortcut">
        <a href="<?php echo get_page_link(10); ?>" class="sh"><p>¿Cómo pedir?</p></a>
      </div>
      <div class="shortcut">
        <a href="<?php echo get_page_link(50); ?>" class="sh"><p>Ver Catálogo</p></a>
      </div>
    </div>
  </div>
</div>
<div class="seccion banner-pedir_768">
  <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_768; ?>"  alt="¿Comó pedir?">
        </a>
</div>
<div class="seccion banner-pedir_992">
  <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_992; ?>"  alt="¿Comó pedir?">
        </a>
</div>
<div class="seccion banner-pedir_1200">
  <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_1200; ?>"  alt="¿Comó pedir?">
        </a>
</div>

<div class="seccion banner-productos">
  <div class="row">
    <div class="col-xs-12 col-sm-5 col-md-4">
      <a href="<?php echo $link; ?>">
        <img class="img-responsive"
            src="<?php echo $foto; ?>"  alt="Productos del mes">
      </a>
    </div>
    <div class="col-sm-7 col-md-8">
      <div class="otros_productos">
        <div class="row">
          <div class="prod_1 col-sm-6 col-md-4">
            <a href="<?php echo $link_1; ?>">
              <img class="img-responsive"
                  src="<?php echo $foto_1; ?>"  alt="producto_1">
            </a>
          </div>
          <div class="prod_2 col-sm-6 col-md-4">
            <a href="<?php echo $link_2; ?>">
              <img class="img-responsive"
                  src="<?php echo $foto_2; ?>"  alt="producto_2">
            </a>
          </div>
          <div class="prod_3 col-md-4">
            <a href="<?php echo $link_3; ?>">
              <img class="img-responsive"
                  src="<?php echo $foto_3; ?>"  alt="producto_3">
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
      <a href="<?php echo get_page_link(10); ?>">
        <img class="img-responsive"
            src="<?php echo $redes ?>"  alt="Redes">
      </a></p>
    </div>
  </div>
</div>

<?php get_footer(); ?>
