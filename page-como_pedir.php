<?php get_header(); ?>
<div class="heading">
  <div class="collapsed" data-toggle="collapse" data-target="#collapse-menu">
    <div class="row">
      <div class="col-xs-12">
        <div class="titulo como_pedir">
          <p>¿CÓMO PEDIR?</p>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $foto_1200 = get_field('banner_1200');
      $foto_992 = get_field('banner_992');
      $foto_768 = get_field('banner_768');
      $foto_vertical = get_field('banner_vertical');
?>


<div class="seccion banner-pedir_vertical">
      <img class="img-responsive"
          src="<?php echo $foto_vertical; ?>"  alt="¿Comó pedir?">
</div>
<div class="seccion banner-pedir_768">
  <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_768; ?>"  alt="¿Comó pedir?">
        </a>
</div>
<div class="seccion banner-pedir_992">
  <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_992; ?>"  alt="¿Comó pedir?">
        </a>
</div>
<div class="seccion banner-pedir_1200">
  <a href="<?php echo get_page_link(10); ?>">
      <img class="img-responsive"
          src="<?php echo $foto_1200; ?>"  alt="¿Comó pedir?">
        </a>
</div>
<div class="seccion shortcuts_pedir">
  <div class="row">
    <div class="col-xs-12">
      <div class="shortcut">
        <a href="<?php echo get_page_link(50); ?>" class="sh"><p>Ver Catálogo</p></a>
      </div>
      <div class="shortcut">
        <a href="<?php echo get_page_link(113); ?>" class="sh"><p>¿Cómo pedir?</p></a>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>
