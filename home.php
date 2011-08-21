<?php get_header(); ?>
  <div class="banner leaderboard">
    <?php the_google_leaderboard_banner(); ?>
  </div>
      <ul id="top">
<?php 
  $top_articles = array();
  foreach (array(array('reports_spain'),array('reports_usa'),array('news','analysis','reports_world')) as $index => $my_slug) {
  $my_cat = array_map("get_category_id_by_slug", $my_slug);
  query_posts(array('posts_per_page' => 1, 'order_by' => date, 'category__in' => $my_cat));
  while (have_posts()) : the_post(); $top_articles[] = get_the_ID(); ?>
        <li class="<?php the_classes(); ?>">
          <h2><?php the_h2s(); ?></h2>
          <h3><?php echo get_the_relative_time('d F'); ?></h3>
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" accesskey="<?php echo($index+1); ?>">
          <?php the_thumbnail(150, 222);?> 
          <big><?php the_title(); ?></big>
          <small><?php the_home_subtitle();?></small>
          <span class="more-link">&raquo;&nbsp;<?php the_continues(); ?></span>
        </a>
      </li>
<?php endwhile;} ?>
    </ul>
    <ul id="left">
<?php
  query_posts(array('caller_get_posts' => 1,  'posts_per_page' => 3, 'cat' => -5, 'post__not_in' => $top_articles));
  while (have_posts()) : the_post(); ?>
      <li class="<?php the_classes(); ?>">
        <h2><?php the_names(); ?></h2>
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
        <fb:like-box href="http://www.facebook.com/boxoffice.es" width="302" show_faces="true" stream="false" header="false"></fb:like-box>
        <![endif]-->
        <!--[if !IE]><!-->
        <script type="text/javascript">
          window.fbAsyncInit = function() {
            fan = document.createElement("fb:like-box");
            fan.setAttribute("href", "http://www.facebook.com/boxoffice.es");
            fan.setAttribute("width", "302");
            fan.setAttribute("show_faces", "true");
            fan.setAttribute("stream", "false");
            fan.setAttribute("header", "false");
            document.getElementById("facebook").appendChild(fan);
            FB.init({appId:'121079989452', status: true, cookie: true, xfbml: true});
            FB.XFBML.parse();
          };
        </script>
        <!--<![endif]-->
      </li>
      <li class="transparent">
        <?php the_google_medium_banner(); ?>
      </li>
      <li class="trailers">
        <h2>Trailers</h2>
        <h3><a href="<?php echo get_page_link(get_page_by_slug('trailers')->ID); ?>" rel="contents" title="Todos los trailers">&raquo; M&aacute;s trailers</a></h3>
        <big>Max the Lion</big>
        <div class="ebuzzing_box">
          <script type="text/javascript" src="http://www.ebuzzing.es/player_blog/player.php?parametre=474070"></script>
          <a href="http://www.ebuzzing.es" class="wikio-widget-ebmini" >Viral video by ebuzzing</a>
          <script type="text/javascript" src="http://www.ebuzzing.es/player_blog/js/mini_share.php" charset="utf-8"></script>
        </div>
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
