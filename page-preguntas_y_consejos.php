<?php get_header(); ?>
<div class="heading">
  <div class="collapsed" data-toggle="collapse" data-target="#collapse-menu">
    <div class="row">
      <div class="col-xs-12">
        <div class="titulo preguntas_consejos">
          <p>PREGUNTAS Y CONSEJOS</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="seccion">
  <div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <div class="preguntas">
          <div class="sub-titulo">
            <div  style="background-image:url(/magnolia/wp-content/themes/magnolia/assets/img/magnolia/logo_magnolia_gift.svg));">

            </div>
          </div>

        <?php $loop1 = new WP_Query( array(
                      'post_type' => 'pregunta',
                      'posts_per_page' => -1,
                      'orderby' => 'menu_order',
                      'order' => 'ASC'
                    ) );
          while ( $loop1->have_posts() ) : $loop1->the_post();?>

        <?php
        $pregunta = get_field('pregunta');
        $respuesta = get_field('respuesta');
        ?>
        <div class="pregunta">
            <div class="collapsed" data-toggle="collapse"
                          data-target="#collapse-<?php echo $post->ID; ?>" >
                <p><?php echo $pregunta; ?></p>
                <span class="glyphicon glyphicon-triangle-right"></span>
                <span class="glyphicon glyphicon-triangle-bottom"></span>
            </div>
        </div>

        <div class="respuesta collapse" id="collapse-<?php echo $post->ID; ?>">
          <p><?php echo $respuesta; ?></p>
        </div>

        <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </div>

  <div class="col-xs-10 col-xs-offset-1">
      <div class="consejos">
        <div class="sub-titulo">
          <div  style="background-image:url());">

          </div>
        </div>

    <?php $loop2 = new WP_Query( array(
                  'post_type' => 'consejo',
                  'posts_per_page' => -1,
                  'orderby' => 'menu_order',
                  'order' => 'ASC'
                ) );
      while ( $loop2->have_posts() ) : $loop2->the_post();?>

      <?php
      $consejo = get_field('consejo');
      ?>

      <div class="consejo">
        <p><?php echo $consejo; ?></p>
      </div>


    <?php endwhile; wp_reset_postdata(); ?>

      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
