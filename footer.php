    	<div id="footer">
    	   <div> Todos los textos son de <strong>Pau Brunet</strong> &bull; <?php echo antispambot("pau@boxoffice.es"); ?> &bull; <acronym title="International Standard Serial Number">ISSN</acronym> 2013-6803<br />
    	     <a href="<?php echo get_page_link(get_page_by_slug('license')->ID); ?>">Licencia de uso</a> 
    	     | <a href="<?php echo get_page_link(get_page_by_slug('press')->ID); ?>">Kit de prensa</a> 
           <?php edit_post_link(); ?></div>
      </div>
    
  </div>
<?php wp_footer(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/boxoffice.js?min"></script>
  <script type="text/javascript">
    <?php if(is_single()) { ?>
    zebra_table();
    <?php } ?>
    $timeout = 4000;
    setTimeout("activate_analytics()", $timeout);
    <?php if (is_active_widget('widget_boxoffice_twitter')) { ?>
    setTimeout("activate_twitter()", $timeout);
    <?php } ?>
    <?php if(is_home()) { ?>
    setTimeout("activate_facebook()", $timeout);
    setTimeout("activate_trailers()", $timeout);
    <?php } ?>
  </script>
  </body>
</html>

