<?php get_header(); ?>
<div class="heading">
  <div class="row">
    <div class="col-xs-12">
      <div class="titulo catalogo">
        <p>CATÁLOGO</p>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-xs-12">
    <div class="categorias">


  <?php
  $taxonomy = 'categoria';
  $categorias = get_terms( $taxonomy , array( 'hide_empty' => 0  ) );?>



  <?php foreach ( $categorias as $categoria ) :?>

    <?php echo $categoria->term_id.' ';
          $link = esc_attr(get_term_link($categoria));
          $foto = get_field('_'.$taxonomy.'_'.$categoria->term_id.'_foto', 'option');?>

      <div class="col-xs-6">
        <div class="categoria">
          <a href="<?php echo $link; ?>">
            <div class="img-responsive" style="background-image: url( <?php echo $foto; ?> );">
            </div>
          </a>
        </div>
      </div>
    <?php endforeach;?>


    </div>
  </div>
</div>


<div class="row">

  <div class="col-xs-12">
    <div class="productos-mes">
      <img class="img-responsive" src="/magnolia/wp-content/themes/magnolia/assets/img/productos/kit_bano.png" alt="Productos del mes" />
    </div>
  </div>

</div>
<?php get_footer(); ?>
