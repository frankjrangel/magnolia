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

<div class="seccion">
  <div class="row">
    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
      <div class="categorias">
        <div class="row">

    <?php $taxonomy = 'categoria';
          $categorias = get_terms( $taxonomy , array(
              'hide_empty'        => 0,
              'orderby'           => 'name',
              'order'             => 'ASC',
          ) );
    ?>



    <?php foreach ( $categorias as $categoria ) :?>

      <?php $link = esc_attr(get_term_link($categoria)). '?t='.$categoria->term_id;
            $foto = get_field('foto', $categoria);
      ?>
            <div class="cols col-xs-
              <?php if ($categoria->term_id == 14 ){
                  echo '12';
                }
                else{
                  echo '6';
                }?>
                col-sm-<?php if ($categoria->term_id == 14 ){
                  echo '12';
                }
                else{
                  echo '4';
                }?>
                col-md-<?php if ($categoria->term_id == 14 ){
                  echo '10 col-md-offset-1';
                }
                else{
                  echo '4';
                }
              ?>
              ">
              <div class="categoria">
                <a href="<?php echo $link; ?>">
                  <img class="img-responsive"
                      src="<?php echo $foto; ?>">
                </a>
              </div>
            </div>
      <?php endforeach;?>


        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
