<?php get_header(); ?>
<script type="text/javascript">
  $( ".titulo" ).addClass("que_ofrecemos");
  $( ".titulo p" ).html("¿ ?");
</script>

<div class="seccion pag404">
  <a href="<?php echo esc_url( home_url('/')) ?>">
    <div class="row">
      <div class="col-xs-12 fondo" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/fondos/motitas.png">
        <div class="row">
          <div class="col-xs-12 col-md-10 col-md-offset-1">
            <img class="img-responsive"
                src="<?php echo get_template_directory_uri(); ?>/assets/img/fondos/404_page.svg"  alt="¡Oh no!">
          </div>
        </div>
      </div>
    </div>
  </a>
</div>

<?php get_footer(); ?>
