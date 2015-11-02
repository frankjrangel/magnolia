                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- /container -->

	<div id="footer">
		<div class="container">
      <div class="redes marrones">
        <a href="<?php the_field('twitter', 30 );?>" target="_blank"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/twitter_logo.svg );">
        </a>
        <a href="<?php the_field('facebook', 30 );?>" target="_blank"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/facebook_logo.svg );">
        </a>
        <a href="<?php the_field('instagram', 30 );?>" target="_blank"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/instagram_logo.svg );">
        </a>
        <a href="<?php the_field('pinterest', 30 );?>" target="_blank"
        style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/img/redes/pinterest_logo.svg );">
        </a>
      </div>
      <div class="redes blancos">
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


    <?php wp_footer(); ?>
    <?php wp_enqueue_script("jquery"); ?>
    <script>
     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
     (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
     m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

     ga('create', 'UA-69500644-1', 'auto');
     ga('send', 'pageview');

    </script>
  </body>
</html>
