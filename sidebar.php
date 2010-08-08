<?php wp_reset_query(); // required by the is_home() again ?>
<?php if(!is_home()) : ?>
      </li>   
    </ul>
<?php endif; ?>
    <ul id="right">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) :
  wp_meta();
endif; ?>
      <li class="sponsors">
        <a title="4K SDCA - The Spanish Digital Cinema Alliance" href="http://www.4kdci.com"><img src="<?php bloginfo('template_url') ?>/images/logo/4ksdca.png" alt="4KSDCA"/></a>
        <a title="Cine 365" href="http://www.cine365.com/noticias"><img src="<?php bloginfo('template_url') ?>/images/logo/cine365.png" alt="Cine 365"/></a>
        <a title="Canal TCM - El cine que ya ten&iacute;as que haber visto" href="http://www.canaltcm.com/"><img src="<?php bloginfo('template_url') ?>/images/logo/tcm.png" alt="TCM"/></a>
      </li>
<?php  if(!is_home() && !is_404() && !is_slug('license') && !is_slug('partners') && !is_slug('press') && !is_slug('trailers')) : ?>
      <li class="transparent">
<?php the_sky_banner(); ?>
      </li>
<?php endif; ?>
    </ul>
