<?php

$my_categories = array( # I guess <meta> do not require HTML escaping for special characters
  'reports_spain'   => array('class'  => 'espana', 
                           'single'   => 'Informe taquilla Espa&ntilde;a',
                           'category' => 'Informes de la taquilla en Espa&ntilde;a',
                           'format'   => 'e',
                           'meta'     => 'Informes de películas estrenadas en la salas de cine de España: número de espectadores, recaudación, tipo de público, éxitos y fracasos.',
                           'continue' => 'Lee el informe semanal de taquilla espa&ntilde;ola'),
  'reports_usa'     => array('class'  => 'eeuu', 
                           'single'   => 'Informe taquilla Estados Unidos',
                           'category' => 'Informes de la taquilla en Estados Unidos',
                           'meta'     => 'Informes de películas estrenadas en la salas de cine de Estados Unidos: número de espectadores, recaudación, tipo de público, éxitos y fracasos..',
                           'continue' => 'Lee el informe semanal de taquilla americana'),
  'reports_world' => array('class'  => 'world', 
                           'single'   => 'Informe taquilla internacional',
                           'category' => 'Informes de la taquilla en otros pa&iacute;ses',
                           'meta'     => 'Informes de películas estrenadas en la salas de cine de otros pa&iacute;ses: número de espectadores, recaudación, tipo de público, éxitos y fracasos..',
                           'continue' => 'Lee el informe semanal de taquilla internacional'),
  'forecasts reports_spain' => array('class'  => 'previsiones espana', 
                           'single'   => 'Previsi&oacute;n taquilla Espa&ntilde;a',
                           'category' => 'Previsiones de los resultados de la taquilla espa&ntilde;ola',
                           'meta'     => 'Previsiones sobre la películas que se estrenar&aacute;n en la salas de cine de España: número de espectadores, recaudación, tipo de público.',
                           'continue' => 'Lee la &uacute;ltima previsi&oacute;n espa&ntilde;ola'),                             
  'forecasts reports_usa'   => array('class'  => 'previsiones eeuu', 
                           'single'   => 'Previsi&oacute;n taquilla Estados Unidos',
                           'category' => 'Previsiones de los resultados de la taquilla americana',
                           'meta'     => 'Previsiones sobre la películas que se estrenar&aacute;n en la salas de cine de Estados Unidos: número de espectadores, recaudación, tipo de público',
                           'continue' => 'Lee la &uacute;ltima previsi&oacute;n americana'),
  'news'            => array('class'  => 'noticias', 
                           'single'   => 'Noticia',
                           'category' => 'Noticias sobre el negocio del cine',
                           'meta'     => 'Noticias sobre el business de Hollywood y el marketing cinematogr&aacute;fico.',
                           'continue' => 'Lee la &uacute;ltima noticia'),
  'analysis'        => array('class'  => 'reportajes', 
                           'single'   => 'Reportaje',
                           'category' => 'Reportajes y an&aacute;lisis del negocio del cine',
                           'meta'     => 'Reportajes y an&aacute;lisis sobre el business de Hollywood y el marketing cinematogr&aacute;fico.',
                           'continue' => 'Lee el &uacute;ltimo reportaje'),
  'partners'        => array('class'  => 'partners', 
                           'single'   => 'Partner',
                           'meta'     => 'Partner que apoyan y patrocinan el trabajo de an&aacute;lisis de Boxoffice.es.',
                           'category' => 'Partner y patrocinadores de Boxoffice.es'),
  'links'           => array('class'  => 'enlaces', 
                           'single'   => 'Enlace',
                           'meta'     => 'Enlaces a p&aacute;ginas web donde se analiza el mundo del cine desde un punto de vista econ&oacute;mico y estad&iacute;stico.',
                           'category' => 'Enlaces sobre el mundo de la taquilla de cine'),
  'about'           => array('class'  => 'contacto', 
                           'single'   => 'Contacto',
                           'meta'     => 'Informaciones sobre el autor de Boxoffice.es y direcci&oacute;n de contacto.',
                           'category' => 'Historia de Boxoffice.es'),
  'license'         => array('class'  => 'licencia', 
                           'single'   => 'Condiciones de uso',
                           'meta'     => 'Condiciones de uso del material publicado en Boxoffice.es y licencia Creative Commons utilizada.',
                           'category' => 'Condiciones de uso'),
  'press'           => array('class'  => 'prensa', 
                           'single'   => 'Sala de prensa',
                           'meta'     => 'Sala de prensa con logo, material gr&aacute;fico y galer&iacute;a de im&aacute;genes de Boxoffice.es.',
                           'category' => 'Sala de prensa'),
  'reviews'         => array('class'  => 'criticas', 
                           'single'   => 'Cr&iacute;tica',
                           'meta'     => 'Cr&iacute;ticas de pel&iacute;culas estrenadas el en mercado espa&ntilde;ol.',
                           'category' => 'Cr&iacute;ticas de pel&iacute;culas'),
  'newsletter'      => array('class'  => 'newsletter', 
                           'single'   => 'Newsletter',
                           'meta'     => 'Bolet&iacute;n semanal para recibir los informes de Boxoffice.es via e-mail.',
                           'category' => 'Bolet&iacute;n semanal de boxoffice.es'),
  'trailers'        => array('class'  => 'trailers', 
                           'single'   => 'Trailer',
                           'meta'     => 'Trailers de pel&iacute;culas proporcionados por Film Trailer (Preview Networks).',
                           'category' => 'Trailers de pel&iacute;culas'),
);

function is_slug($slug) {return $GLOBALS['my_slug'] == $slug;}
function get_class_by_slug($slug) {return $GLOBALS['my_categories'][$slug]['class'];}
function get_format_by_slug($slug) {return $GLOBALS['my_categories'][$slug]['format'];}
function get_meta_by_slug($slug) {return $GLOBALS['my_categories'][$slug]['meta'];}

function category_to_slug($category) {
  return $category->slug;
}

function category_to_name($category) {
  return $category->name;
}

function get_the_slugs() {
  $slugs = array_map(category_to_slug, get_the_category());
  sort($slugs);
  return join($slugs, " ");
}

function is_forecast() {
  return in_array('forecasts', array_map(category_to_slug, get_the_category()));
}

function the_classes() {
  echo get_class_by_slug(get_the_slugs());
}

function the_names() {
  $cats = get_the_category();
  $cat = count($cats) == 2 && $cats[1]->slug == 'forecasts' ? $cats[1] : $cats[0];  
  echo $cat->name;
}

function the_h2s() {
  $slugs = get_the_slugs();
  $slug = count($slugs) == 2 && $slugs[1] == 'forecasts' ? 'forecasts' : $slugs[0];
  echo $GLOBALS['my_categories'][$slug]['category'];
}

function the_continues() {
  $slugs = get_the_slugs();
  if(array_key_exists('continue', $GLOBALS['my_categories'][$slugs]))
    echo $GLOBALS['my_categories'][$slugs]['continue'];
  else
    echo "Contin&uacute;a";
}

function get_h2_by_slug($slug, $single=false) {
  if($single)
      return $GLOBALS['my_categories'][$slug]['single'];
  else 
      return $GLOBALS['my_categories'][$slug]['category'];
}

function get_continue_by_slug($slug) {
  // Deprecated (use the_continues)
  if(array_key_exists('continue', $GLOBALS['my_categories'][$slug]))
    return $GLOBALS['my_categories'][$slug]['continue'];
  else
    return "Contin&uacute;a";
}    

function get_page_by_slug($page_title, $output = OBJECT) {
	global $wpdb;
	$page = $wpdb->get_var($wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE post_name = %s AND post_type='page'", $page_title));
	if ($page)
		return get_page($page, $output);
	return null;
}

function get_category_id_by_slug($slug) {
	global $wpdb;
	return $wpdb->get_var($wpdb->prepare("SELECT term_ID FROM $wpdb->terms WHERE slug = %s", $slug));
}

function menu_tab($type, $slug) {
  if($type == 'category') {
    $cat  = get_category_by_slug($slug); 
    $link = get_category_link($cat->term_id);
    $desc = get_h2_by_slug($slug);
    $name = $cat->name;
  }
  elseif($type == 'page') {
    $page = get_page_by_slug($slug);
    $link = get_page_link($page->ID);
    $desc = get_h2_by_slug($slug);
    $name = $page->post_title;
  }
  echo '        <li class="' . get_class_by_slug($slug) . '"><a href="' . $link . '" rel="contents" title="' . $desc . '">' . $name . '</a></li>' . "\n";
}

function the_body_class() {
  if (is_home())
    $class = "home";
  elseif (is_search())
    $class = "search";
  elseif (is_single() || is_404())
    $class = "single";
  elseif (is_page())
    $class = "single ". get_class_by_slug($GLOBALS['my_slug']);
  elseif (is_category())
    $class = get_class_by_slug($GLOBALS['my_slug']);
  echo $class;
}

function the_meta_facebook() {
  $title = get_the_title();
  $type = is_home() ? "website" : "article";
  $image = "http://boxoffice.es/wp-content/themes/boxoffice10/images/logo/boxoffice_es_logo_twitter.png";
  $url = get_permalink();
  echo "    <meta name='og:title' content='$title' />\n";
  echo "    <meta name='og:type' content='$type' />\n";
  echo "    <meta name='og:url' content='$url' />\n";
  echo "    <meta name='og:image' content='$image' />\n";
  echo "    <meta name='og:author' content='Pau Brunet' />\n";
  echo "    <meta name='og:site_name' content='Boxoffice.es' />\n";
  echo "    <meta name='fb:page_id' content='121079989452' />\n";
  echo "    <meta name='fb:admins' content='665788321' />\n";
  // $title = is_search() ? "" : get_the_h2();
  // $title += (!is_category() || is_year()) ? wp_title('&mdash;', False) : "";
  // $type = is_home() ? "website" : "article";
  // $image = "http://boxoffice.es/wp-content/themes/boxoffice10/images/logo/boxoffice_es_logo_facebook.jpg";
  // // $url = is_home() ? "boh" : is_search() ? "boh" : is_single() ? get_permalink() : is_404() ? "boh" : \
  //   is_page() ? get_page_link($page->ID);
}

// TO DO: merge or clean with the_body_class
function the_left_class() {
  if(is_single() || is_category() || is_page())
      $class = get_class_by_slug($GLOBALS['my_slug']);
  elseif(is_search())
      $class = "search";
  elseif(is_404())
      $class = "e404";
  echo $class;
}

function the_meta_description($curr_post = '', $search_term = '') {
  if (is_home())
    $meta = "Recaudaciones de pel&iacute;culas estrenadas en Espa&ntilde;a, Estados Unidos y Argentina, reportajes sobre el business de Hollywood y el marketing cinematogr&aacute;fico.";
  elseif (is_search())
    $meta = "Resultados de la b&uacute;squeda en Boxoffice.es para ". $search_term;
  elseif (is_404())
    $meta = "P&aacute;gina no encontrada en Boxoffice.es (error 404)";
  elseif (is_single()) { # otherwise every post gets the same category meta
    if (get_post_custom_values(subtitle, $curr_post->ID))
      $meta = current(get_post_custom_values(subtitle, $curr_post->ID));
    else
      # Google Webmaster does not like 'Short meta descriptions' so repeat the
      # title multiple times. It's a partial solution, the proper way would be
      # the show the title of the movies in the article when this information
      # will be available.
      $meta = substr(str_repeat(wp_title('', 0), 10), 0, 150);
  } else
    $meta = get_meta_by_slug($GLOBALS['my_slug']);  
    # Add year to distinguish /reports_usa/2010, /2009, ..
  echo $meta;
}

function the_h1() {
  $h1 = '<img alt="'. get_bloginfo('name') .'" src="'. get_bloginfo('template_url') .'/images/logo/boxoffice_es_logo_menu.png" />';
  if (!is_home()) // add link to home
    $h1 = '<a href="'. get_bloginfo('url') .'" rel="index" title="'. get_bloginfo('name') .' &bull; Portada (tecla 0)" accesskey="0">'. $h1 . '</a>';
  echo "<h1>$h1</h1>";  
}

function get_the_h2() {
  if (is_home())
    $h2 = "Boxoffice.es &mdash; La web de la industria del cine";
  if (is_search())
    $h2 = "Resultados de la b&uacute;squeda";
  elseif (is_404())
    $h2 = "P&aacute;gina no encontrada";
  elseif (is_single() || is_category() || is_page())
    $h2 = get_h2_by_slug($GLOBALS['my_slug'], is_single());  
  return $h2;
}

function the_h2() {echo "<h2>". get_the_h2() ."</h2>";}

function the_h3() {
  global $wp_query, $s;
  if (is_search()) {
    $results = (1 == $wp_query->post_count ? 'resultado' : 'resultados');
    $h3 = $wp_query->post_count .' '. $results .' para "'. $wp_query->query_vars['s'] .'"';
  }  
  elseif (is_404() || is_page())
    $h3 = "";
  elseif(is_single())
    $h3 = get_the_relative_time('d F Y'); 
  elseif(is_category() && !is_slug('links'))
      $h3 = get_the_years(get_query_var('cat'));
  echo "<h3>". $h3 ."</h3>";
}

function the_feeds() {
  if (is_category() || is_single()) {
    echo '    <link title="'. get_h2_by_slug($GLOBALS['my_slug'], false) .' (RSS 2.0)"  href="'. get_category_feed_link($GLOBALS['my_cat']->term_id, 'rss2') .'" rel="alternate contents" type="application/rss+xml" />'."\n";
    # echo '    <link title="'. get_h2_by_slug($GLOBALS['my_slug'], false) .' (Atom 0.3)" href="'. get_category_feed_link($GLOBALS['my_cat']->term_id, 'atom') .'" rel="alternate contents" type="application/atom+xml" />'."\n";
  }
  echo '    <link title="Todo el contenido de Boxoffice.es (RSS 2.0)"  href="'. get_bloginfo('rss2_url') .'" rel="alternate index" type="application/rss+xml" />'."\n";
  # echo '    <link title="Todo el contenido de Boxoffice.es (Atom 0.3)" href="'. get_bloginfo('atom_url') .'" rel="alternate index" type="application/atom+xml" />'."\n";
  remove_action('wp_head', 'feed_links_extra', 3); // Removes the links to the extra feeds such as category feeds
  remove_action('wp_head', 'feed_links', 2); // Removes links to the general feeds: Post and Comment Feed
  remove_action('wp_head', 'wp_generator'); // Removes the Wordpress version i.e. - to avoid hacking
  remove_action('wp_head', 'wlwmanifest_link'); // Remove, it's only used by Windows Live Editor
  remove_action('wp_head', 'rsd_link'); // Remove, it's only used by Windows Live Editor
  remove_action('wp_head', 'aktt_head'); // Twitter Tools is only used for admin (post tweets), no need for its client css and js
  wp_deregister_script('jquery'); // We don't need jQuery, do we?
  
}

function my_rss_head() {
  // Add image logo to RSS head
  echo '<image><title>', bloginfo_rss('name'), '</title>';
  echo '<url>', bloginfo_rss('template_url'), '/images/logo/boxoffice_es.png</url>';
  echo '<link>', bloginfo_rss('url'), '</link>';
  echo '<width>122</width><height>22</height>';
  echo '<description>Boxoffice.es</description></image>';
}
add_action('rss2_head','my_rss_head');
add_action('rss_head','my_rss_head');

function my_excerpt_rss($excerpt) {
  // IMDB news requires at least 150 words
  return my_excerpt(200, false, false, $exclude="img,p,font", false, false);    
}
add_filter('the_excerpt_rss', 'my_excerpt_rss');

function my_title_rss($title) {
  // Add category in main feed
  if(get_query_var('cat') == "") {
    $cats = get_the_category(); 
    $title = $cats[0]->name .": ". $title;
  }
  return $title;
}
add_filter('the_title_rss', 'my_title_rss');

function the_home_subtitle() {
  if (get_post_custom_values(subtitle))
    echo "<span class='excerpt'>" . current(get_post_custom_values(subtitle)) . "</span>";
  else
    my_excerpt(23, false);
}

function the_cat() {
  $categories = get_the_category();
  echo '<strong>'. get_h2_by_slug($categories[0]->slug, true) .'</strong>';
}

function the_weekend() {if (get_post_custom_values(weekend)) echo 'semana '. current(get_post_custom_values(weekend));}
function the_datestamp() {if (!is_slug('links')) echo '('. get_the_time('d F Y') .')';}
function the_subtitle() {if (get_post_custom_values(subtitle)) echo htmlspecialchars(current(get_post_custom_values(subtitle)));}
function the_link() {if (get_post_custom_values(link)) echo current(get_post_custom_values(link));}

function get_the_relative_time($time_format) {
  $minutes_ago = (time() - get_the_time('U')) / 60;
  if($minutes_ago < 2)
    return "Hace 1 minuto";
  if($minutes_ago < 60)
    return "Hace ". floor($minutes_ago) ." minutos";
  if($minutes_ago/60 < 2)
    return "Hace 1 hora";
  if($minutes_ago/60 < 5)
    return "Hace ". floor($minutes_ago/60) ." horas";
  if(date('dmY') == get_the_time('dmY'))
    return "Hoy";
  if(date('dmY', time() - 60*60*24) == get_the_time('dmY'))
    return "Ayer";
  return get_the_time($time_format);
}

// Removed, now antispam is used instead
// function the_admin_email($spaced = false) {
//   // Return the admin email, in case with spaces to avoid spam
//   $email = get_bloginfo('admin_email');
//   if($spaced)
//    $email = " " . preg_replace("/(.)/", " $1", $email);
//   echo $email;
// }

function the_full_banner() {
  if(!function_exists('adrotate_banner')) return;
  if(is_slug('reports_world'))
    echo adrotate_banner('4');
  // elseif(is_slug('reports_spain'))
  //  echo adrotate_banner('6');
  else
    echo adrotate_banner('1');
  // <!--a href=""><img class="banner full" src="..." alt="Banner" /></a-->
  echo '<span class="ir publ">Publicidad</span>';  
}

function the_google_full_banner() {
  $google_code = '
    <script type="text/javascript">
    google_ad_client = "ca-pub-2975283179368133";
    /* 2011-Full BAnner */
    google_ad_slot = "9196645418";
    google_ad_width = 468;
    google_ad_height = 60;
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
  ';
  echo $google_code;
  // echo '<span class="ir publ">Publicidad</span>';
}


function the_google_leaderboard_banner() {
  $google_code = '
    <script type="text/javascript">
    google_ad_client = "ca-pub-2975283179368133";
    /* 2011-Leaderboard Banner */
    google_ad_slot = "0854595069";
    google_ad_width = 728;
    google_ad_height = 90;
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
  ';
  echo $google_code;
}

function the_sky_banner() {
  if (!function_exists('adrotate_banner')) return;
  echo '<span class="ir publ">Publicidad</span>';
  if(is_slug('reports_world'))
    echo adrotate_banner('5');
  else
  // <!--a href=""><img class="banner sky" src="..." alt="Banner" /></a-->
    echo adrotate_banner('2');  
}

function the_google_sky_banner() {
  $google_code = '
    <script type="text/javascript"><!--
    google_ad_client = "ca-pub-2975283179368133";
    /* 2011-Skyscraper */
    google_ad_slot = "9490306656";
    google_ad_width = 120;
    google_ad_height = 600;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
  ';
  echo '<span class="ir publ">Publicidad</span>';
  echo "<span class=\"banner sky\">$google_code</span>";
}

function the_medium_banner() {
  if (!function_exists('adrotate_banner')) return;
  echo '<span class="ir publ">Publicidad</span>';
  // <!--a href=""><img class="banner medium" src="..." alt="Banner" /></a-->
  echo adrotate_banner('3');  
}

function the_google_medium_banner() {
  $google_code = '
    <script type="text/javascript"><!--
    google_ad_client = "ca-pub-2975283179368133";
    /* Medium Rectangle */
    google_ad_slot = "3374876557";
    google_ad_width = 300;
    google_ad_height = 250;
    //-->
    </script>
    <script type="text/javascript"
    src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
  ';
  echo '<span class="ir publ">Publicidad</span>';
  echo $google_code;
}

   


function the_navigation() {
  $prev = get_previous_post(true); 
  $output = '<div class="more-link prev">';
  if($prev)
    $output .= '<a href="'. get_permalink($prev->ID) .'" rel="prev" title="' . $prev->post_title . ' (tecla 8)" accesskey="8">&laquo; ' . get_h2_by_slug($GLOBALS['my_slug'], true) . '  anterior</a>';
  else
    $output .= '<a href="'. get_category_link($GLOBALS['my_cat']->term_id)  .'" rel="contents" title="' . get_h2_by_slug($GLOBALS['my_slug']) . ' (tecla 8)" accesskey="8">Volver a ' . get_h2_by_slug($GLOBALS['my_slug']) . '</a>';
  $output .= '</div>';

  $next = get_next_post(true);
  $output .= '<div class="more-link next">';
  if($next)
    $output .= '<a href="'. get_permalink($next->ID) .'" rel="next" title="' . $next->post_title . ' (tecla 9)" accesskey="9">' . get_h2_by_slug($GLOBALS['my_slug'], true) . '  siguiente &raquo;</a>';
  else
    $output .= '<a href="'. get_category_link($GLOBALS['my_cat']->term_id) .'" rel="contents" title="' . get_h2_by_slug($GLOBALS['my_slug']) . ' (tecla 9)" accesskey="9">Volver a ' . get_h2_by_slug($GLOBALS['my_slug']) . '</a>';
  $output .= '</div>';
  echo $output;
}

function my_content() {
  // TODO: this function should exclude non-xhtml tags, such as <font>
  // For an idea, check http://rider.sofarider.com/blog/wordpress-tips/how-to-trim-the_content/
  global $page, $pages;
  $pages[$page-1] =  preg_replace("/<font.*?>(.*?)<\/font>/i", "$1", $pages[$page-1]);
  the_content();
}

// IMPORTANT! For advanced_excerpt to work I had to modify the code as in:
// http://wordpress.org/support/topic/254317
// adding return $c; at the end of array_complement in advanced-excerpt.php
function my_excerpt($length = 100, $continue = true, $wpautop = false, $exclude="img,p,font", $use_excerpt = false, $remove_table=true) {
  global $page, $pages;

  // this is just for the is_search part, to combine with relevanssi search
  if($use_excerpt)
    $pages[$page-1] = get_the_excerpt();
  elseif($remove_table)
    // force <!--more--> when a (box office) table starts 
    $pages[$page-1] = preg_replace("/<table(.*?)>/", "<!--more-->", $pages[$page-1]);

  if(!$wpautop)
  	remove_filter('the_excerpt', 'wpautop');
  
  // TO DO: This function should return a <p>, not a <span>.
  // But the same <p> should include the <a> link, as in the_content()
  // But removing tags as img, such in the_advanced_excerpt
  echo '<span class="excerpt">';
  the_advanced_excerpt('length='.$length.'&exclude_tags='.$exclude);
  if($continue) {
    echo ' <a href="'; 
    the_permalink();
    echo '" title="';
    the_title();
    echo '">&raquo;&nbsp;Contin&uacute;a</a>';
  }
  echo "</span>";
  	
  if(!$wpautop)
  	add_filter('the_excerpt', 'wpautop');
}

function year_to_link($year, $cat) {
  if($year == get_the_time('Y'))
    return $year;
  global $wp_rewrite;
  if($wp_rewrite->using_permalinks())
    $link = get_category_link($cat) . $year; 
  else
    $link = get_category_link($cat) . '&amp;year=' . $year; 
  return '<a href="'. $link  .'" title="'. $year .'">' . $year . '</a>';  
}

function get_the_years($cat) {
  global $wpdb;
  $q = "SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts 
  JOIN $wpdb->term_relationships ON ID = object_id
  WHERE post_status = 'publish' AND term_taxonomy_id IN (". $cat . ") ORDER BY post_date ASC";
  $years = $wpdb->get_col($q);
  if(count($years) == 0) return;
  // Special case for "forecasts"
  if(strstr($cat,",")) {
    global $post, $wp_query;
    $post = get_post($wp_query->post->ID);
    $cat = get_category_id_by_slug('forecasts');
  }

  $links = array_map(year_to_link, $years, array_fill(0, count($years), $cat));
  return implode(' | ', $links);
}


/* ********************* IMAGE MANAGEMENT ********************** */

// Returns wp_upload_dir but from a cookie-less subdomain (for static files)
function static_upload_dir() {
  $upload_dir = wp_upload_dir(); 
  if(preg_match('@^(.*?)://(?:|www\.)boxoffice.es/(.*?)$@i', $upload_dir['url'], $matches)) {
    $upload_dir['url'] = "$matches[1]://images.boxoffice.es/$matches[2]";
  }
  return $upload_dir;
}

# // WP2.9 can make use of post thumbnails, uncommenting these lines: 
# if ( function_exists( 'add_theme_support' ) )
#   add_theme_support( 'post-thumbnails' );

// there are 3 thumbnail size: 75x11 (category), 150x222 (top) and 225x150 (left)
// then, in posts, image should be resized with fixed width: 360
function the_thumbnail($dst_w = 75, $dst_h = 111, $use_poster = true) {
  $upload_dir = static_upload_dir(); 
  $alt = array('alt="'. strip_tags(get_the_title()) .'"');
  $title = array('title="'. strip_tags(get_the_title()) .'"');

  // first check if a custom poster exists
  if($use_poster) {
    $cats = get_the_category(); $format = get_format_by_slug($cats[0]->slug);
    $weekends = get_post_custom_values(weekend);
    if(!is_null($weekends)) {
      $src_file = $upload_dir['path'] . "/informe". get_the_time('Y') ."_". current($weekends) . $format .".jpg";
      $src_url = $upload_dir['url'] ."/". basename($src_file);
      $has_image = file_exists($src_file); // the custom poster exists locally?
    }
  }
  // otherwise retrieve the first image from the content
  if(!$has_image) {
    global $page, $pages;
    $content = $pages[$page-1];  
    if(preg_match('@<img(.*?) src="(.*?)"(.*?)/>@i', $content, $matches)) { 
      // an image was found in the post
      $src_url = $matches[2];
      preg_match('@ alt="(.*?)"@i', $matches[1] .' '. $matches[3], $alt);
      preg_match('@ title="(.*?)"@i', $matches[1] .' '. $matches[3], $title);
    	// from thumbnail to original
      if (preg_match('@^(.*?)-([0-9]*)x([0-9]*).(jpg|jpeg|gif|png)$@i', $src_url, $matches))
        $src_url = "$matches[1].$matches[4]";      
      $src_file = $upload_dir['path'] . "/". basename($src_url);
      $has_image = file_exists($src_file); // the image exists locally?
    }
  }
  // if there is a poster or image, take or create the thumbnail  
  if($has_image) {
    preg_match('@^(.*?).(jpg|jpeg|gif|png)$@i', $src_url, $matches);
    $dst_url = $matches[1].'-'.$dst_w.'x'.$dst_h.'.'.$matches[2];
    $dst_file = $upload_dir['path'] . "/". basename($dst_url);
    $dst_url = $upload_dir['url'] . "/" . basename($dst_file); // force current server
    if(!file_exists($dst_file)) { // the thumbnail does not exist: create it
  		require_once(ABSPATH .'/wp-admin/includes/image.php'); 
  		$src = wp_load_image($src_file); 
  		$rel = imagesx($src)/imagesy($src);
  		$new_rel = $dst_w/$dst_h;
  		$src_w = ($rel > $new_rel ? round($new_rel*imagesy($src)) : imagesx($src));
  		$src_h = ($rel < $new_rel ? round(imagesx($src)/$new_rel) : imagesy($src));
  		$src_x = ($rel > $new_rel ? round((imagesx($src) - $src_w)/2) : 0);
  		$src_y = ($rel < $new_rel ? round((imagesy($src) - $src_h)/2) : 0);
    	$dst = imagecreatetruecolor($dst_w, $dst_h);
    	if (function_exists('imageantialias'))
    		imageantialias($dst, true);
    	imagecopyresampled($dst, $src, 0, 0, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
    	imagedestroy($src);
    	$has_image = imagejpeg($dst, $dst_file, 100);      
    }
  }

  // if no thumbnail was available or created, fall back gracefully   
  if(!$has_image)
    $dst_url = get_bloginfo('template_url') ."/images/empty_".$dst_w."x".$dst_h.".png";

  echo "<img $alt[0] $title[0] src=\"$dst_url\" />";
}


/* ********************* SIDEBAR WIDGETS********************** */

if (function_exists('register_sidebar'))
    register_sidebar();
    
// TO DO: 
// function update_newsletter_title() {
//   // if the content does not contain <form> then say "subscription accepted"
//   get_the_content()
// }
  
function widget_boxoffice_newsletter() {
  if (is_slug('newsletter')) return; // don't show form twice
  global $ddfm; 
  echo "      <li class=\"newsletter\">\n";
  echo "        <h2>Newsletter</h2>\n";
  echo $ddfm{1}->generate_data();
  echo "      </li>\n";
}
if (function_exists('register_sidebar_widget'))
  register_sidebar_widget(__('Boxoffice Newsletter'), 'widget_boxoffice_newsletter');    

function widget_boxoffice_pledge() {
  $page = get_page_by_slug('partners');
  $link = get_page_link($page->ID);
  echo "      <li class=\"pledge\">\n";
  echo "        <a href=\"";
  echo $link;
  echo "\">Contribuye a Boxoffice.es</a>\n";
  echo "      </li>\n";
}
if (function_exists('register_sidebar_widget'))
  register_sidebar_widget(__('Boxoffice Pledge'), 'widget_boxoffice_pledge');    

function widget_boxoffice_twitter() {
  echo "      <li class=\"twitter\">\n";
  echo "        <h2>Twitter</h2>\n";
  echo "        <small><a href=\"http://twitter.com/BoxOfficeSpain\" title=\"Follow @BoxOfficeSpain on Twitter\">Follow @BoxofficeSpain</a></small>\n";
  echo "        <ul id=\"twitter_update_list\"><li></li></ul>\n";
  echo "      </li>\n";
}
if (function_exists('register_sidebar_widget'))
  register_sidebar_widget(__('Boxoffice Twitter'), 'widget_boxoffice_twitter');    

function get_last_feed_title($feed) {
  // TODO: If the feed is offline, this SHOULD NOT raise an error
  $rss = fetch_feed($feed);
  $last_item = $rss->get_item(0);
  $title = $last_item->get_title();
  $link = $last_item->get_permalink();
  return $title;
}

function break_in_lines($text) {
  // for each space, if imagettfbox is wider than maxsize, change with \n
  // TO DO: use imagettfbox to see the actual width, rather than strlen
  $words = explode(" ", $text); 
  $text = "";
  $char_per_line = 18;
  foreach($words as $word) {
    $length_so_far += (mb_strlen($word, 'UTF-8') + 1);
    if($length_so_far < $char_per_line)
      $text .= " " . $word;
    else {
      $line_so_far += 1;
      if($line_so_far == 2) $char_per_line = 10;
      if($line_so_far == 3) {$text .= "&#8230;"; break;}
      $text .= "\n" . $word;
      $length_so_far = mb_strlen($word, 'UTF-8');
    } 
  }
  return trim($text);
}

function text_to_image($src_file, $dest_file, $text) {
  if (function_exists("imagettftext")) {
    $text = break_in_lines($text);
    $src = imagecreatefrompng($src_file);
    imagettftext($src, 15, 0, 6, 65, 1, ABSPATH .'/wp-content/fonts/fotogramas.ttf.php', $text);
    imagepng($src, $dest_file);
    imagedestroy($src);
  }
}


function widget_boxoffice_fotogramas() {
  $file = "/widget_fotogramas.png";
  $dest = get_option('upload_path') . $file;
  $src = TEMPLATEPATH . "/images/template" . $file;
  $upload_dir = static_upload_dir(); 
  $url = $upload_dir['url'] . $file;
  $secs_in_week = 60*60*24*1; // changed 7 days for 1 day
  if(!(file_exists($dest)) || (time() - filemtime($dest) > $secs_in_week)) {
    $text = get_last_feed_title('http://lo-que-la-taquilla-se-llevo.blogs.fotogramas.es/feed/');
    text_to_image($src, $dest, $text);
  }
  echo "      <li class=\"colaboraciones\">\n";
  echo "        <span class=\"ir colab\">Colaboraciones</span>\n";
  echo "        <a href=\"http://www.fotogramas.es/Blogs/Lo-que-la-taquilla-se-llevo\" title=\"Fotogramas.es\">\n";
  echo "          <img alt=\"Fotogramas.es\" src=\"". $url ."\" />\n";
  echo "        </a>\n";
  echo "      </li>\n";
}    
if (function_exists('register_sidebar_widget'))
  register_sidebar_widget(__('Boxoffice Fotogramas'), 'widget_boxoffice_fotogramas');    

function my_category_link($catlink, $category_id) {
  // remove the original /all/ in front of the categories
  global $wp_rewrite;
  if(!$wp_rewrite->using_permalinks()) return $catlink;
  return preg_replace("^(.*?)/all/(.*?)^", "$1/$2", $catlink);  
}
add_filter('category_link', 'my_category_link',1000,2);


/* ********************* TODO ********************** */
    
// for the Twitter Tools
function post_to_tweet($tweet, $post) {
  $cats = get_the_category($post->ID);
  $slug = utf8_encode(html_entity_decode(get_h2_by_slug($cats[0]->slug, true))) .": ";
  $link = " ". get_bloginfo('url') . "/?p=". $post->ID;
  $size = 140 - strlen($slug) - strlen($link);
  $text = (strlen($post->post_title) > $size ? substr($post->post_title, 0, $size - 1). "…" : $post->post_title);
  $tweet->tw_text = $slug . $text . $link;
	return $tweet;
}
add_filter('aktt_do_blog_post_tweet', 'post_to_tweet', 10, 2);
    

/* ********************* TODO ********************** */
    
// Stick weekly watermark over thumbnail if requested
// function the_watermark($cat_id) {
//   $weekends = get_post_custom_values(weekend);
//   if(is_null($weekends)) // e.g., for news
// 	  $url = get_bloginfo('template_url') . "/images/empty_150x222.png";
//   else
//     $wm_file = "/informe" . get_the_time('Y') . "_" . current($weekends) . format_category_thumbnail($cat_id) .  ".wm.jpg";
//     if(!(file_exists(get_option('upload_path') . $wm_file)))
//       $src_file = get_the_first_image();
//   
//     //   $upload_dir = static_upload_dir(); 
//     //   $dest = imagecreatefromgif($upload_dir['url'] . "/informe/9.jpg");
//     //   $src = imagecreatefromgif($upload_dir['url'] . "/informe/12.jpg");
//     // 
//     //   // Copy and merge
//     //   imagecopymerge($dest, $src, 10, 10, 0, 0, 100, 47, 75);
//     // 
//     //   // Output and free from memory
//     //   header('Content-Type: image/jpeg');
//     //   imagejpeg($dest);
//     // 
//     //   imagedestroy($dest);
//     //   imagedestroy($src);
// 
//       do something
// 
//     $upload_dir = static_upload_dir(); 
//     echo '<img class="poster" src="'. $upload_dir['url'] . $wm_file .'" alt="'. get_the_title() . '" />';
// }
// 
// // For the watermark
// // IMPORTANT! To use Makekki's Watermark plug-in, edit
// // lines 229-230 of wp-admin/includes/media.php, as specified in 
// // http://www.wp-watermark.com/installation
// function attach_watermark($file, $mmPreview) {
//   if(true) // change to: if img is to be watermarked with calender
//     MM_Execute_WM($file, $mmPreview);
// }
// 

// for watermark

// function test_watermark() {
//   // Create image instances
//   $upload_dir = static_upload_dir(); 
//   $dest = imagecreatefromgif($upload_dir['url'] . "/informe/9.jpg");
//   $src = imagecreatefromgif($upload_dir['url'] . "/informe/12.jpg");
// 
//   // Copy and merge
//   imagecopymerge($dest, $src, 10, 10, 0, 0, 100, 47, 75);
// 
//   // Output and free from memory
//   header('Content-Type: image/jpeg');
//   imagejpeg($dest);
// 
//   imagedestroy($dest);
//   imagedestroy($src);
//   
// }
    
      
?>
