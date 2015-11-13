<?php get_header(); ?>
<script type="text/javascript">
  $( "#que_ofrecemos" ).addClass("current_page");
  $( ".titulo" ).addClass("que_ofrecemos");
  $( ".titulo p" ).html("¿QUÉ OFRECEMOS?");
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
      $p_1 = get_field('otro_producto_1');
      $p_2 = get_field('otro_producto_2');
      $p_3 = get_field('otro_producto_3');
      $link_1 = esc_url( get_permalink($p_1->ID) ). '?t='.$term_id;
      $link_2 = esc_url( get_permalink($p_2->ID) ). '?t='.$term_id;
      $link_3 = esc_url( get_permalink($p_3->ID) ). '?t='.$term_id;
      $foto_1_1 = get_field('foto_1', $p_1->ID);
      $foto_2_1 = get_field('foto_1', $p_2->ID);
      $foto_3_1 = get_field('foto_1', $p_3->ID);
      $foto_1_2 = get_field('foto_2', $p_1->ID);
      $foto_2_2 = get_field('foto_2', $p_2->ID);
      $foto_3_2 = get_field('foto_2', $p_3->ID);
      $nombre_1 = get_field('nombre', $p_1->ID);
      $nombre_2 = get_field('nombre', $p_2->ID);
      $nombre_3 = get_field('nombre', $p_3->ID);
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
<div class="seccion banner_como_pedir">
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
            $par = '';
            while ( $loop->have_posts() ) : $loop->the_post();
              $num++;
              if ($num % 2 == 0) {
                $par = 'par';
              }else {
                $par = 'impar';
              }
              $paso = get_field('paso');
            ?>

            <div class="col-xs-12 col-sm-2">
              <div class="paso <?php echo $par; ?> sh">
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
          <div class="fondo_hojas">
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
</div>
<div class="seccion banner-productos">
    <div class="row">
      <div class="prod_0 col-xs-12 col-sm-5 col-md-4">
        <a href="<?php echo $link; ?>">
          <img class="img-responsive"
              src="<?php echo $foto; ?>"  alt="Productos del mes">
        </a>
      </div>
      <div class="col-sm-7 col-md-8">
        <div class="otros_productos-titulo">
          <div style="background-image:     url(<?php echo get_template_directory_uri(); ?>/assets/img/que_ofrecemos/otros_productos.svg);">

          </div>
        </div>
        <div class="otros_productos">
          <div class="row">
            <div class="prod_1 col-sm-6 col-md-4">
              <a href="<?php echo $link_1; ?>"
                 title="<?php echo $nombre_1; ?>"
                 style="background-image:
                   url(<?php echo $foto_1_1; ?>);">
              </a>
              <a href="<?php echo $link_1; ?>"
                 title="<?php echo $nombre_1; ?>"
                 style="background-image:
                   url(<?php echo $foto_1_2; ?>);">
              </a>
            </div>
            <div class="prod_2 col-sm-6 col-md-4">
              <a href="<?php echo $link_2; ?>"
                 title="<?php echo $nombre_2; ?>"
                 style="background-image:
                   url(<?php echo $foto_2_1; ?>);">
              </a>
              <a href="<?php echo $link_2; ?>"
                 title="<?php echo $nombre_2; ?>"
                 style="background-image:
                   url(<?php echo $foto_2_2; ?>);">
              </a>
            </div>
            <div class="prod_3 col-md-4">
              <a href="<?php echo $link_3; ?>"
                 title="<?php echo $nombre_3; ?>"
                 style="background-image:
                   url(<?php echo $foto_3_1; ?>);">
              </a>
              <a href="<?php echo $link_3; ?>"
                 title="<?php echo $nombre_3; ?>"
                 style="background-image:
                   url(<?php echo $foto_3_2; ?>);">
              </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="seccion banner-redes">
  <div class="row">
    <div class="col-xs-12">
      <div id="slider" style="background-image:url(<?php echo $redes; ?>);">

        <div id="slide_prev">
          <div class="slide_button" ></div>
        </div>
        <div id="slide_next">
          <div class="slide_button" ></div>
        </div>
        <div id="slider_index">
          <div class="index slide_button"></div>
        </div>
        <div class="row">
          <div class="col-xs-10 col-xs-offset-1">
            <div class="wrapper">

            <ul class="slides">

              <li class="slide sh">
                <div class="sh giving_back"  >
                  <div class="foto" >
                    <img class="img-responsive"
                        src="<?php echo $foto_giving_back; ?>"  alt="Giving Back">
                  </div>
                      <div class="mensaje">
                        <h2>1</h2>
                      </div>
                </div>
              </li>

            </ul>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="seccion banner-giving_back">
  <div class="row">
    <div class="col-xs-12 col-sm-7 col-lg-8">
      <div class="sh fondo" style="background-image:url(<?php echo $fondo_giving_back; ?>);" >
      </div>
    </div>
    <div class="col-xs-12 col-sm-5 col-lg-4">
      <div class="sh giving_back" style="background-image:url(<?php echo $fondo_giving_back; ?>);" >
        <div class="foto" >
          <img class="img-responsive"
              src="<?php echo $foto_giving_back; ?>"  alt="Giving Back">
        </div>
            <div class="mensaje">
              <p><?php echo $mensaje_giving_back; ?></p>
            </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
