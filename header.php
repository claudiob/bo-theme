<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
  <head profile="http://gmpg.org/xfn/11">
    <title><?php if(!is_search()) echo get_the_h2(); if(!is_category() || is_year()) wp_title('&mdash;'); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="description" content="<?php the_meta_description($post, $wp_query->query_vars['s']); ?>" />
    <meta name="keywords" content="taquilla, cine, españa, recaudaciones, espectadores, spain" />
    <meta http-equiv="Content-Language" content="es" />
    <meta name="language" content="es" /> 
    <meta name="viewport" content="width=1000" />
    <meta name="robots" content="all" />
    <meta name="author" content="Pau Brunet" />
    <meta name="copyright" content="Pau Brunet" />
    <meta name="DC.rights" scheme="DCTERMS.URI" content="http://creativecommons.org/licenses/by-nd/3.0/es" />
    <meta name="DC.rights" content="(c) Pau Brunet" />
    <meta name="version" content="2011" />
<?php the_meta_facebook(); ?>
    <link rel="icon" type="image/vnd.microsoft.icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
    <link rel="apple-touch-icon" href="<?php bloginfo('url'); ?>/favicon_iphone.png" />
    <link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico" />
    <link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <!-- link rel="stylesheet" media="all" href="<?php bloginfo('template_url'); ?>/style-max.css" type="text/css" / -->
    <!--[if lt IE 9]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/table_padding.css" type="text/css" /><![endif]-->
    <!--[if lt IE 7]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/multiple_class.css" type="text/css" /><![endif]-->
    <!--[if lt IE 6]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hack_box.css" type="text/css" /><![endif]-->
    <!--[if lt IE 5.5]><link media="all" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/hack_a.css" type="text/css" /><![endif]-->
    <link rel="stylesheet" media="print" href="<?php bloginfo('template_url'); ?>/css/print.css" type="text/css" />
<?php the_feeds(); ?>
    <link rel="alternate pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <?php wp_head(); ?>
  </head>
  <body class="<?php the_body_class(); ?>">
    <div id="page">
      <?php the_h1(); ?>
      <ul id="menu">
<?php
    menu_tab('category', 'reports_spain');
    menu_tab('category', 'reports_usa');
    menu_tab('category', 'reports_world');
    menu_tab('category', 'news');
    menu_tab('category', 'analysis');
//    menu_tab('page',     'partners');
//    menu_tab('category', 'links');
    menu_tab('page',     'about');
?>
      </ul>
      <form class="search" method="get" action="<?php bloginfo('url'); ?>/">
        <fieldset>
          <legend>Busca:</legend>
          <label for="s">Texto:</label>
          <input type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" alt="Escribe que buscar"  />
          <input type="submit" value="Busca" />
        </fieldset>
      </form>
      <div class="banner leaderboard">
        <?php the_google_leaderboard_banner(); ?>
      </div>
<?php if(!is_home()) : ?>    
      <ul id="left"><li class="<?php the_left_class(); ?>">
<?php the_h2(); ?>
<?php the_h3(); ?>
<?php endif; ?>