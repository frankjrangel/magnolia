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


<?php
  $foto_1 = get_field('foto_1');
  $foto_2 = get_field('foto_2');
  $foto_3 = get_field('foto_3');
  $foto_4 = get_field('foto_4');
  $nombre = get_field('nombre');
  $precio = get_field('precio');
  $detalles = get_field('detalles');
?>

<div class="row">
  <div class="col-xs-12">
    <div class="producto">

      <div class="fotos">
        <div class="row">
          <div class="col-xs-12">
            <div class="foto">
              <img class="img-responsive"
                  src="<?php echo $foto_1; ?>">
            </div>
          </div>
            <?php
            if ($foto_2 != null){
              echo '
              <div class="col-xs-12">
                <div class="foto">
                  <img class="img-responsive"
                    src="'. $foto_2.'">
                </div>
              </div>';

              if ($foto_3 != null){
                echo '
                <div class="col-xs-12">
                  <div class="foto">
                    <img class="img-responsive"
                      src="'. $foto_3.'">
                  </div>
                </div>';
                if ($foto_4 != null){
                  echo '
                  <div class="col-xs-12">
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

      <div class="info">
        <h5><?php echo $nombre; ?></h5>
        <h5>Bs. <?php echo $precio; ?></h5>
        <p>Detalles del producto: <span><?php echo $detalles; ?></span></p>
      </div>

    </div>
  </div>
</div>


<?php get_footer(); ?>