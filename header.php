<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="banda-logo">
    <a class="navbar-brand brand" href="/magnolia/">
      <div class="img-responsive" style="background-image: url(<?php the_field('magnolia');?>);">
      </div>
    </a>
  </div>

  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="menu container">

        <button type="button" class="navbar-toogle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>


      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?php wp_list_pages(array(
            			'title_li' => ''
            		)); ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div>

      </div>

    </div>

  </nav>

  <div class="container">
