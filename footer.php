    	<div id="footer">
    	   <div> Todos los textos son de <strong>Pau Brunet</strong> &bull; <?php echo antispambot(get_the_author_email()); ?> &bull; <acronym title="International Standard Serial Number">ISSN</acronym> 2013-6803<br />
    	     <a href="<?php echo get_page_link(get_page_by_slug('license')->ID); ?>">Licencia de uso</a> 
    	     | <a href="<?php echo get_page_link(get_page_by_slug('press')->ID); ?>">Kit de prensa</a> 
           <?php edit_post_link(); ?></div>
      </div>
    
  </div>
  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php bloginfo('template_url') ?>/boxoffice.js"></script>
  <script type="text/javascript">addLoadEvent(SlimStat);</script>
  <script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
  <script type="text/javascript">
    if (typeof(_gat)=='object')
      setTimeout(function(){_gat._getTracker("UA-754675-1")._trackPageview()}, 1500);
  </script>
  <?php if(is_single()) { ?>
  <script type="text/javascript">zebra_table();</script>
  <?php } ?>
  <?php if (is_active_widget('widget_boxoffice_twitter')) { ?>
  <script type="text/javascript" src="http://twitter.com/BoxOfficeSpain/lists/boxoffice/statuses.json?callback=twitterCallback2&amp;per_page=4"></script>
  <?php } ?>
  <?php if(is_home()) { ?>
  <script type="text/javascript" src="http://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php/es_ES"></script>
  <script type="text/javascript">setTimeout(facebook_activate, 1500);</script>
  <?php } ?>
  </body>
</html>

