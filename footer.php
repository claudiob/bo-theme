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
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/boxoffice.js"></script>
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
    setTimeout("activate_trailers()",  $timeout);
<?php } ?>
  </script>
<?php if(is_home() || is_single()) { ?>
  <!--[if !IE]><!-->
  <script type="text/javascript">
    // IE does not support window.fbAsyncInit, so it's called directly
    setTimeout("activate_facebook()",  $timeout);
  </script>
  <!--<![endif]-->
<?php } ?>

  </body>
</html>
