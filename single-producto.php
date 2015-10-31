<?php get_header(); ?>
<script type="text/javascript">
  $( "#catalogo" ).addClass("current_page");
  $( ".titulo" ).addClass("catalogo");
  $( ".titulo p" ).html("CATÁLOGO");
</script>
<?php
  $term_id = $_GET["t"] ;
  $term = get_term_by( 'id', $term_id , 'categoria');
  $term_link = get_term_link($term);
  $term_name = $term->name;
?>
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
  <div class="nav_categoria">
    <ol class="breadcrumb">
      <li><a href="<?php echo get_page_link(50); ?>">CATÁLOGO</a></li>
      <li><a href="<?php echo $term_link.'?t='.$term_id; ?>"><?php echo $term_name; ?></a></li>
      <li id='activa'><a href=""><?php echo $nombre; ?></a></li>
    </ol>
  </div>
</div>

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
                    <div style="background-image:
                         url(<?php echo $foto_1; ?>);">
                    </div>
                  </div>
                </div>
                  <?php if ($foto_2 != null){
                      echo '
                      <div class="cols col-xs-12 col-sm-6">
                        <div class="foto">
                          <div style="background-image:
                               url('. $foto_2.');">
                          </div>
                        </div>
                      </div>';

                      if ($foto_3 != null){
                        echo '
                        <div class="cols col-xs-12 col-sm-6">
                          <div class="foto">
                            <div style="background-image:
                                 url('. $foto_3.');">
                            </div>
                          </div>
                        </div>';
                        if ($foto_4 != null){
                          echo '
                          <div class="cols col-xs-12 col-sm-6">
                            <div class="foto">
                              <div style="background-image:
                                   url('. $foto_4.');">
                              </div>
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

                  <div class="pedido">
                    <div class="row">
                      <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-lg-12 col-lg-offset-0">
                        <div class="boton">
                          <a href="<?php echo get_page_link(113).'?c='.$postid; ?>">Preparar Gift</a>
                        </div>
                      </div>
                    </div>
                  </div>

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
