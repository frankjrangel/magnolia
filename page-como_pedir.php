<?php get_header(); ?>
<script type="text/javascript">
  $( "#como_pedir" ).addClass("current_page");
  $( ".titulo" ).addClass("como_pedir");
  $( ".titulo p" ).html("¿CÓMO PEDIR?");
</script>
<?php
  $loop = new WP_Query( array(
    'post_type' => 'paso',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ) );
?>

<?php
  $foto_letrero_pasos_movil = get_field('foto_letrero_pasos_movil');
  $foto_letrero_pasos = get_field('foto_letrero_pasos');
  $mensaje = get_field('mensaje');
  $email = get_field('email', 14 );
?>
<div class="seccion">
  <div id="fondo_pasos">
    <div class="seccion letrero_pasos">
      <div class="row">
        <div class="col-xs-12 col-md-10 col-md-offset-1 col-lg-8 col-lg-offset-2">
          <div class="foto_letrero_pasos_movil">
            <img class="img-responsive"
                src="<?php echo $foto_letrero_pasos_movil; ?>">
          </div>
          <div class="foto_letrero_pasos">
            <img class="img-responsive"
                src="<?php echo $foto_letrero_pasos; ?>">
          </div>
        </div>
      </div>
    </div>
    <div class="seccion pasos">
      <div class="row">
        <div id="fondo_pasos_movil" class="col-xs-10 col-xs-offset-1 col-sm-12 col-sm-offset-0 col-md-10 col-md-offset-1 col-lg-10 col-lg-offset-1">
          <div class="row">

            <?php
            $num = 0;
            while ( $loop->have_posts() ) : $loop->the_post();
              $num++;
              $paso = get_field('paso');
            ?>

            <div class="col-xs-12 col-sm-2">
              <div class="paso sh">
                <div class="row">
                  <div class="sh2 col-xs-3 col-sm-12">
                    <p class="num_pasos"><?php echo $num; ?>.</p>
                  </div>
                  <div class="sh2 texto_pasos col-xs-9 col-xs-pull-1 col-sm-12 col-sm-pull-0">
                    <span><p><?php echo $paso; ?></p></span>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; wp_reset_query(); ?>

          </div>
          <div class="seccion mensaje_como_pedir">
            <div class="row">
              <div class="col-xs-10 col-xs-offset-1">
                <div class="mensaje_caja">
                  <p><?php echo $mensaje; ?></p>
                  <p><?php echo $email; ?></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>

<div class="seccion shortcuts-como_pedir">
  <div class="row">
    <div class="col-xs-12">
      <div class="shortcut-2">
        <a href="<?php echo get_page_link(50); ?>" class="sh"><p>Ver Catálogo</p></a>
      </div>
      <div class="shortcut-2">
        <a href="<?php echo get_page_link(113); ?>" class="sh"><p>Armar Gift</p></a>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
