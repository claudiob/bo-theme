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
        <a title="Boxoffice Consulting - Consultor&iacute;a de an&aacute;lisis, ventas y compras de pel&iacute;culas" href="http://www.boxoffice-consulting.com/"><img class="consulting" src="<?php bloginfo('template_url') ?>/images/logo/boxoffice_consulting.png" alt="Boxoffice Consulting"/></a>
        <a title="Boxoffice Consulting - del gui&oacute;n a la pel&iacute;cula" href="http://www.boxofficescript.com/"><img class="script" src="<?php bloginfo('template_url') ?>/images/logo/boxofficescript.png" alt="Boxoffice Script"/></a>
      </li>
<?php  if(!is_home() && !is_404() && !is_slug('license') && !is_slug('partners') && !is_slug('press') && !is_slug('trailers')) : ?>
      <li class="transparent">
<?php the_google_sky_banner(); ?>
      </li>
<?php endif; ?>
    </ul>
