<?php get_header(); ?>
<?php
$producto = get_post( $_GET["c"] );
$nombre = $producto->nombre;
?>
<script type="text/javascript">
  $( ".titulo" ).addClass("hacer_pedido");
  $( ".titulo p" ).html("ARMAR GIFT");
</script>

<div id="fondo_pedido" class="seccion form">
  <div class="row">
    <div class="col-xs-12">
      <div class="form-content">
        <div class="row">
          <div class="col-xs-12 col-sm-8 col-sm-offset-2">

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

<script type="text/javascript">
  if('<?php echo $nombre; ?>' != '')
    $( "#ninja_forms_field_11" ).html("<?php echo $nombre; ?>");
</script>

<?php get_footer(); ?>
