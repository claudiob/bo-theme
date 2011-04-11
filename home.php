<?php get_header(); ?>
      <ul id="top">
<?php 
  $top_articles = array();
  foreach (array(array('reports_spain'),array('reports_usa'),array('news','analysis','reports_argentina')) as $index => $my_slug) {
  $my_cat = array_map("get_category_id_by_slug", $my_slug);
  query_posts(array('posts_per_page' => 1, 'order_by' => date, 'category__in' => $my_cat));
  while (have_posts()) : the_post();
    $top_articles[] = get_the_ID();
    $cats = get_the_category(); $cat = $cats[0]; $slug = $cat->slug; ?>
        <li class="<?php echo get_class_by_slug($slug); ?>">
          <h2><?php echo get_h2_by_slug($slug); ?></h2>
          <h3><?php echo get_the_relative_time('d F'); ?></h3>
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" accesskey="<?php echo($index+1); ?>">
          <?php the_thumbnail(150, 222);?> 
          <big><?php the_title(); ?></big>
          <small><?php the_home_subtitle();?></small>
          <span class="more-link">&raquo;&nbsp;<?php echo get_continue_by_slug($slug); ?></span>
        </a>
      </li>
<?php endwhile;} ?>
    </ul>
    <ul id="left">
<?php
  query_posts(array('caller_get_posts' => 1,  'posts_per_page' => 3, 'cat' => -5, 'post__not_in' => $top_articles));
  while (have_posts()) : the_post();
  $cats = get_the_category(); ?>
      <li class="<?php echo get_class_by_slug($cats[0]->slug); ?>">
        <h2><?php echo $cats[0]->name; ?></h2>
        <h3> <?php echo get_the_relative_time('d F'); ?> </h3>
        <?php the_thumbnail(225, 150, false); ?>
        <big><a href="<?php the_permalink();?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></big>
        <?php my_excerpt(150);?>
      </li>
<?php endwhile; ?>
    </ul>
    <ul id="middle">
      <li id="facebook">
        <div id="fb-root"></div>
        <!--[if IE]>
        <script src="http://connect.facebook.net/es_ES/all.js#xfbml=1" ></script>
        <script>
        // IE does not support window.fbAsyncInit, so it's called directly
        FB.init({appId: '121079989452', status: true, cookie: true, xfbml: true});
        </script>
        <![endif]-->
        <fb:like-box href="http://www.facebook.com/boxoffice.es" width="302" show_faces="true" stream="false" header="false"></fb:like-box>
      </li>
      <li class="transparent">
        <?php the_google_medium_banner(); ?>
      </li>
      <li class="trailers">
        <h2>Trailers</h2>
        <h3><a href="<?php echo get_page_link(get_page_by_slug('trailers')->ID); ?>" rel="contents" title="Todos los trailers">&raquo; M&aacute;s trailers</a></h3>
        <big>Ahora en cine</big>
        <!--[if !IE]><!-->
        <object id="trailer_object">
        <!--<![endif]-->
        <!--[if IE]>
        <object type="application/x-shockwave-flash" id="trailer_object" data="http://www.player.filmtrailer.com/v3.4/player.swf?file=http://es.player-feed.previewnetworks.com/cinema/now-5/341100112-1/&amp;display_title=always&amp;menu=true&amp;enable_link=true&amp;default_quality=small&amp;controlbar=over&amp;autostart=false&amp;backcolor=888888&amp;frontcolor=000000&amp;lightcolor=ffffff&amp;screencolor=ffffff&amp;share=0&amp;repeat=always&amp;shuffle=true&amp;volume=80">
          <param name="movie" value="http://www.player.filmtrailer.com/v3.4/player.swf?file=http://es.player-feed.previewnetworks.com/cinema/now-5/341100112-1/&amp;display_title=always&amp;menu=true&amp;enable_link=true&amp;default_quality=small&amp;controlbar=over&amp;autostart=false&amp;backcolor=888888&amp;frontcolor=000000&amp;lightcolor=ffffff&amp;screencolor=ffffff&amp;share=0&amp;repeat=always&amp;shuffle=true&amp;volume=80">
        <![endif]-->
          <img alt="Adobe Flash is required to watch trailers" src="<?php bloginfo('template_url') ?>/images/blank_300x190.png">
        </object>
      </li>
<?php 
    $slug = 'analysis';
    $cat = get_category_by_slug($slug);
    query_posts(array('cat' => $cat->term_id, 'posts_per_page' => 1, 'orderby' => 'rand', 'post__in'  => get_option('sticky_posts')));
    while (have_posts()) : the_post(); ?>
      <li class="<?php echo get_class_by_slug($slug); ?>">
        <h2><?php echo $cat->name; ?></h2>
        <h3><a href="<?php echo get_category_link($cat->term_id); ?>" rel="contents" title="<?php echo $cat->category_description; ?>">&raquo; Lista completa</a></h3>
        <big>&lsquo;<?php the_title(); ?>&rsquo;</big>
        <small>publicado originariamente en <?php the_time('F Y'); ?></small>
        <?php my_excerpt(); ?>
      </li>
<?php endwhile; ?>
    </ul>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
