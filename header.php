<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Magnolia Gift</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicons/favicon-32x32.png" sizes="32x32">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />

  <!--[if lt IE 9]>
      <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.min.js"> </script>
      <script src="<?php echo get_template_directory_uri(); ?>/js/PIE.js"> </script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"> </script>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"> </script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <!--<![endif]-->

  <!-- Le styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

  <?php wp_head(); ?>
</head>
<body>

  <div class="background-banda-logo">
    <div class="logo-magnolia">
      <a class="navbar-brand brand" href="<?php echo esc_url( home_url('/')) ?>">
        <div style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/magnolia/logo_magnolia_gift.svg );">
        </div>
      </a>
    </div>
  </div>

  <div id="wings-navbar">
    <div class="container-ext">
      <div class="wrapper container">
        <div class="row">
          <div class="col-xs-12 col-sm-offset-1 col-sm-10">
            <div id="wings-menu-background" class="wrapper">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="navbar">
    <div class="container-ext">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-10 col-sm-offset-1">

            <div class="wrapper">
              <nav class="navbar navbar-default">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="wrapper">

                      <div class="collapse navbar-collapse" id="collapse-menu">
                        <ul class="nav navbar-nav">
                          <li id="que_ofrecemos"><a href="<?php echo esc_url( home_url('/')) ?>">¿QUÉ OFRECEMOS?</a></li>
                          <li id="catalogo"><a href="<?php echo get_page_link(50); ?>">CATÁLOGO</a></li>
                          <li id="como_pedir"><a href="<?php echo get_page_link(10); ?>">¿CÓMO PEDIR?</a></li>
                          <li id="hacer_pedido"><a href="<?php echo get_page_link(113); ?>">PREPARAR GIFT</a></li>
                          <li id="preguntas_consejos"><a href="<?php echo get_page_link(151); ?>">PREGUNTAS Y TIPS</a></li>
                          <li id="contacto"><a href="<?php echo get_page_link(14); ?>">CONTACTO</a></li>
                        </ul>
                      </div><!-- Collapse -->

                    </div>
                  </div>
                  <div class="col-xs-12">
                    <div class="wrapper">
                      <div class="heading">
                          <div class="collapsed" data-toggle="collapse" data-target="#collapse-menu">
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="titulo">
                                  <p></p>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
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

          </div>
          <div class="col-xs-1 col-xs-offset-11">

            <div class="redes_blancos_fixed">
              <a href="<?php the_field('twitter', 30 );?>" target="_blank"
              style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/twitter_logo_blanco.svg );">
              </a>
              <a href="<?php the_field('facebook', 30 );?>" target="_blank"
              style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/facebook_logo_blanco.svg );">
              </a>
              <a href="<?php the_field('instagram', 30 );?>" target="_blank"
              style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/instagram_logo_blanco.svg );">
              </a>
              <a href="<?php the_field('pinterest', 30 );?>" target="_blank"
              style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/pinterest_logo_blanco.svg );">
              </a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container-ext">
  <div class="container">
    <div class="row">
      <div id="content-background" class="wrapper col-xs-12 col-sm-10 col-sm-offset-1">
        <div id="content">
            <div class="row">
              <div class="col-xs-12 col-sm-offset-1 col-sm-10">
                <div id="secciones">
