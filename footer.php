    <div id="footer">
      <div> 
        Todos los textos son de <strong>Pau Brunet</strong> &bull; <?php echo antispambot("pau@boxoffice.es"); ?> &bull; <acronym title="International Standard Serial Number">ISSN</acronym> 2013-6803<br />
        <a href="<?php echo get_page_link(get_page_by_slug('license')->ID); ?>">Licencia de uso</a> |
        <a href="<?php echo get_page_link(get_page_by_slug('press')->ID); ?>">Kit de prensa</a> 
        <?php edit_post_link(); ?>  
      </div>
    </div>
  </div>
<?php wp_footer(); ?>
<?php if(is_home() || is_single()) { ?>
  <div id="fb-root"></div>
  <script>
    window.fbAsyncInit = function() {
      FB.init({appId:'121079989452', status: true, cookie: true, xfbml: true});
      FB.XFBML.parse(document.getElementById());
    };
  </script>
<?php } ?>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/boxoffice-max.js"></script>
  <script type="text/javascript">
    $timeout = 3000;
<?php if(is_single()) { ?>
    zebra_table();
<?php } ?>
    setTimeout("activate_analytics()", $timeout);
<?php if (is_active_widget('widget_boxoffice_twitter')) { ?>
    setTimeout("activate_twitter()",   $timeout);
<?php } ?>
<?php if(is_home()) { ?>
    setTimeout("activate_facebook()",  $timeout);
    setTimeout("activate_trailers()",  $timeout);
<?php } elseif(is_single()) { ?>
    setTimeout("activate_facebook()",  $timeout);
<?php } ?>
  </script>
  </body>
</html>
