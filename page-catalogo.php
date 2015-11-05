<?php get_header(); ?>
<script type="text/javascript">
  $( "#catalogo" ).addClass("current_page");
  $( ".titulo" ).addClass("catalogo");
  $( ".titulo p" ).html("CATÁLOGO");
</script>

<div class="seccion">
  <div class="row">
    <div class="col-xs-12 col-lg-10 col-lg-offset-1">
      <div class="categorias">
        <div class="row">

    <?php $taxonomy = 'categoria';
          $categorias = get_terms( $taxonomy , array(
              'hide_empty'        => 0
          ) );

          function ordenar( $a , $b )
          {
            $x = get_field( 'orden' , $a );
            $y = get_field( 'orden' , $b );
            return $x > $y;
          }
          usort($categorias, "ordenar");

    ?>



    <?php foreach ( $categorias as $categoria ) :?>
      <?php $publicado = get_field('publicado', $categoria);
            if ($publicado == 'Si'): ?>
        <?php $link = esc_attr( get_term_link($categoria) ) . '?t=' . $categoria->term_id;
              $foto = get_field('foto', $categoria);
        ?>
            <div class="cols col-xs-<?php if ($categoria->term_id == 14 ){
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
                <div class="categoria <?php if ($categoria->term_id == 14 ) echo "producto_del_mes"?>">
                  <a href="<?php echo $link; ?>" style="background-image:
                       url(<?php echo $foto; ?>);">
                  </a>
                </div>
          </div>

        <?php endif; ?>
      <?php endforeach;?>


        </div>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
