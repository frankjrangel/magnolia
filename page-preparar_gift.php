<?php get_header(); ?>
<?php
$producto = get_post( $_GET["c"] );
$nombre = $producto->nombre;
$mensaje = get_field('mensaje');

?>
<script type="text/javascript">
  $( "#hacer_pedido" ).addClass("current_page");
  $( ".titulo" ).addClass("hacer_pedido");
  $( ".titulo p" ).html("ARMAR GIFT");
</script>

<div id="fondo_pedido" class="seccion form">
  <div class="row">
    <div class="col-xs-12">
      <div class="form-content">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">

      <?php
        if( function_exists( 'ninja_forms_display_form' ) ){
          ninja_forms_display_form( 6 );
        }
      ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="seccion mensaje_preparar">
  <div class="row">
    <div class="col-xs-12">
      <p><?php echo $mensaje; ?></p>
    </div>
  </div>
</div>

<script type="text/javascript">
  if('<?php echo $nombre; ?>' != '')
    $( "#ninja_forms_field_11" ).html("<?php echo $nombre; ?>");
</script>

<?php get_footer(); ?>
