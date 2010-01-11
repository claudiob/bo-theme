<?php global $post; $GLOBALS['my_page'] = get_page($post->ID); $GLOBALS['my_slug'] = $GLOBALS['my_page']->post_name; ?>
<?php get_header(); ?>
    <big><!--<?php the_title(); ?>--></big>
    <p id="mediapark">
      <object data="http://es.mediapark.filmtrailer.com/v1.3/large/?channel_user_id=341100112-1&amp;css_url=<?php bloginfo('template_url'); ?>/css/trailers.css" type="text/html"></object>
    </p>
    <!--[if lt IE 9]><script type="text/javascript">
      document.getElementById('mediapark').innerHTML = '<iframe frameborder="0" src ="http://es.mediapark.filmtrailer.com/v1.3/large/?channel_user_id=341100112-1&amp;css_url=<?php bloginfo('template_url'); ?>/css/trailers.css">El browser que estás utilizando no permite ver los trailers de Boxoffice.es.</iframe>';
    </script><![endif]-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
