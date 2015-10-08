<?php get_header(); ?>
<div class="heading">
  <div class="row">
    <div class="col-xs-12">
      <div class="titulo que_ofrecemos">
        <p>CATÁLOGO</p>
      </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-xs-12">
    <div class="categorias">

  <?php
    $categorias = get_terms( 'categoria', array( 'hide_empty' => 0 ) );

    foreach ( $categorias as $categoria ) {
      echo '
      <div class="col-xs-6">
        <div class="categoria">
          <a href="'. esc_attr(get_term_link($categoria)).'">
          </a>
        </div>
      </div>';
    }
  ?>
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
