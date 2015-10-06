<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Magnolia Gift</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Le styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <?php wp_head(); ?>
</head>
<body>

  <div class="background-banda-logo">
    <div class="logo-magnolia">
      <a class="navbar-brand brand" href="/magnolia/">
        <div class="img-responsive" style="background-image: url(wp-content/themes/magnolia/assets/img/magnolia/logo_magnolia_gift.svg );">
        </div>
      </a>
    </div>
  </div>

  <div class="wrapper container">
    <nav class="navbar navbar-default">
      <div class="row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
          <div class="wrapper">

            <div class="collapse navbar-collapse" id="collapse-menu">
              <ul class="nav navbar-nav">
                <li><a href="<?php echo esc_url( home_url('/')) ?>">¿QUÉ OFRECEMOS?</a></li>
                <li><a href="<?php echo get_post_type_archive_link('catalogo') ?>">CATÁLOGO</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('como_comprar'))) ?>">¿CÓMO COMPRAR?</a></li>
                <li><a href="<?php echo get_post_type_archive_link('preguntas_y_consejos') ?>">PREGUNTAS Y CONSEJOS</a></li>
                <li><a href="<?php echo esc_url(get_permalink(get_page_by_path('contacto'))) ?>">CONTACTO</a></li>
              </ul>
            </div><!-- Collapse -->

          </div>
        </div>

        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu">
          <span class="sr-only">toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

      </div>
    </nav>
  </div>

  <div class="wrapper container">
      <div class="row">
        <div class="col-xs-12 col-sm-offset-1 col-sm-10">
          <div id="wings-menu-background" class="wrapper">
          </div>
        </div>
      </div>
  </div>

  <div class="container">
    <div class="row">
      <div id="content-background" class="wrapper col-xs-12 col-sm-offset-1 col-sm-10">
          <div id="content">
