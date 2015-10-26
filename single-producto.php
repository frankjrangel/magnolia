<?php get_header(); ?>
<script type="text/javascript">
  $( ".titulo" ).addClass("catalogo");
  $( ".titulo p" ).html("CATÁLOGO");
</script>

<?php
  $postid = get_the_ID();
  $foto_1 = get_field('foto_1');
  $foto_2 = get_field('foto_2');
  $foto_3 = get_field('foto_3');
  $foto_4 = get_field('foto_4');
  $nombre = get_field('nombre');
  //$precio = get_field('precio');
  $detalles = get_field('detalles');
?>
<div class="seccion">
  <div class="row">
    <div class="col-xs-12 col-md-10 col-md-offset-1">
      <div class="producto">

        <div class="row">
          <div class="cols col-xs-12 col-lg-8">
            <div class="fotos">
              <div class="row">
                <div class="cols col-xs-12 col-sm-6 ">
                  <div class="foto">
                    <img class="img-responsive"
                        src="<?php echo $foto_1; ?>">
                  </div>
                </div>
                  <?php if ($foto_2 != null){
                      echo '
                      <div class="cols col-xs-12 col-sm-6">
                        <div class="foto">
                          <img class="img-responsive"
                            src="'. $foto_2.'">
                        </div>
                      </div>';

                      if ($foto_3 != null){
                        echo '
                        <div class="cols col-xs-12 col-sm-6">
                          <div class="foto">
                            <img class="img-responsive"
                              src="'. $foto_3.'">
                          </div>
                        </div>';
                        if ($foto_4 != null){
                          echo '
                          <div class="cols col-xs-12 col-sm-6">
                            <div class="foto">
                              <img class="img-responsive"
                                src="'. $foto_4.'">
                            </div>
                          </div>';
                        }
                      }
                    }
                  ?>
              </div>
            </div>
          </div>
          <div class="cols col-xs-12 col-lg-4">
            <div class="info">
              <div class="row">
                <div class="col-xs-12">
                  <div class="data">
                    <div>
                      <h5><?php echo $nombre; ?></h5>
                      <?php /*<h5>Bs.  echo $precio; </h5>*/ ?>
                      <p>Detalles del producto: <span><?php echo $detalles; ?></span></p>
                    </div>
                  </div>

                  <?php /* <div class="pedido">
                    <div class="row">
                      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-12 col-lg-offset-0">
                        <div class="boton">
                          <a href="<?php echo get_page_link(113).'?c='.$postid; ?>">Hacer Pedido</a>
                        </div>
                      </div>
                    </div>
                  </div> */ ?>

              </div>
            </div>
          </div>
        </div>
      </div>


      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
