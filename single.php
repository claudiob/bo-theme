<?php 
  $cats = get_the_category(); 
  $GLOBALS['my_cat'] = $cats[0]; 
  $GLOBALS['my_slug'] = get_the_slugs();
  get_header();
  while (have_posts()) : the_post(); ?>
    	  <big><?php the_title(); ?></big>
      	<?php my_content(); ?>
      	<p class="firma"><?php the_author() ?></p>
      	<div id="fb-like">
          <div id="fb-root"></div>
          <!--[if IE]>
          <script src="http://connect.facebook.net/es_ES/all.js#xfbml=1" ></script>
          <script>
          // IE does not support window.fbAsyncInit, so it's called directly
          FB.init({appId: '121079989452', status: true, cookie: true, xfbml: true});
          </script>
          <fb:like href="<?php the_dreamhost_permalink(); ?>" show_faces="true" width="450" font=""></fb:like>
          <![endif]-->
          <!--[if !IE]><!-->
          <script type="text/javascript">
            window.fbAsyncInit = function() {
              // Like Button
              fan = document.createElement("fb:like");
              fan.setAttribute("href", "<?php the_dreamhost_permalink(); ?>");
              fan.setAttribute("width", "450");
              fan.setAttribute("show_faces", "true");
              fan.setAttribute("font", "");
              document.getElementById("fb-like").appendChild(fan);
              // Comment box
              fan = document.createElement("fb:comments");
              fan.setAttribute("href", "<?php the_dreamhost_permalink(); ?>");
              fan.setAttribute("width", "700");
              fan.setAttribute("num_posts", "2");
              document.getElementById("fb-like").appendChild(fan);
              // Facebook!
              FB.init({appId:'121079989452', status: true, cookie: true, xfbml: true});
              FB.XFBML.parse();
            };
          </script>
          <!--<![endif]-->
        </div>
        <?php the_navigation(); ?>
      	<!-- TO ADD: Print this article, tweet, etc. > Maybe on top as well -->
<?php 
  endwhile;
  get_sidebar();
  get_footer(); ?>
