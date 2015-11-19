<?php get_header(); ?>
<script type="text/javascript">
  $( ".titulo" ).addClass("que_ofrecemos");
  $( ".titulo p" ).html("¿?");
</script>
<?php $taxonomy = 'categoria';
      $term_id  = '14';
      $term = get_term_by( 'id' , $term_id , $taxonomy );
      $link = esc_attr(get_term_link($term)). '?t='.$term_id;
      $redes = get_field('banner-redes');
      $foto_giving_back = get_field('foto_giving_back');
      $mensaje_giving_back = get_field('mensaje_giving_back');
      $fondo_giving_back = get_field('banner_giving_back');
      $foto = get_field('banner-productos');
?>
<?php
  $loop = new WP_Query( array(
    'post_type' => 'paso',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ) );
?>

<?php
  $foto_letrero_pasos = get_field('foto_letrero_pasos', 10);
  $mensaje = get_field('mensaje', 10);
  $email = get_field('email', 14 );
?>

<div class="seccion intro">
  <div class="row">
    <div class="col-xs-6 col-xs-offset-3">
      <img class="img-responsive"
          src="<?php echo get_template_directory_uri(); ?>/assets/img/que_ofrecemos/que_ofrecemos.svg"  alt="¿Qué ofrecemos?">
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

<?php get_footer(); ?>
