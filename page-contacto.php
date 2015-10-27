<?php get_header(); ?>
<script type="text/javascript">
  $( "#contacto" ).addClass("current_page");
  $( ".titulo" ).addClass("contacto");
  $( ".titulo p" ).html("CONTACTO");
</script>

<div id="fondo_contacto" class="seccion form">
  <div class="row">
    <div class="col-xs-12">
      <div class="form-content">
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-sm-offset-3">

      <?php
        if( function_exists( 'ninja_forms_display_form' ) ){
          ninja_forms_display_form( 8 );
        }
      ?>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>

<div class="seccion datos_contacto">
  <div class="row">
    <div class="col-xs-12">
      <p>magnoliagift@gmail.com</p>
    </div>
  </div>
</div>


<?php get_footer(); ?>
