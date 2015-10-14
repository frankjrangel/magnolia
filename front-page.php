<?php get_header(); ?>
<div class="heading">
  <div class="row">
    <div class="col-xs-12">
      <div class="titulo que_ofrecemos">
        <p>¿QUÉ OFRECEMOS?</p>
      </div>
    </div>
  </div>
</div>
<div class="intro">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
      <p><?php echo get_field('que_ofrecemos'); ?></p>
    </div>
  </div>
</div>
<div class="shortcuts">
  <div class="row">
    <div class="col-xs-12">
      <div class="shortcut">
        <a href="<?php echo get_page_link(10); ?>" class="sh"><p>¿Cómo comprar?</p></a>
      </div>
      <div class="shortcut">
        <a href="<?php echo get_page_link(50); ?>" class="sh"><p>Ver Catálogo</p></a>
      </div>
    </div>
  </div>
</div>

<?php $taxonomy = 'categoria';
      $term_id  = '14';
      $term = get_term_by( 'id' , $term_id , $taxonomy );
      $link = esc_attr(get_term_link($term)). '?t='.$term_id;
      $foto = get_field('foto', $term);
?>
<div class="row">

  <div class="col-xs-12">
    <div class="productos-mes">
      <a href="<?php echo $link; ?>">
        <img class="img-responsive"
            src="<?php echo $foto; ?>"  alt="Productos del mes">
      </a>
    </div>
  </div>

</div>
<?php get_footer(); ?>
