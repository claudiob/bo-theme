<?php 
  $GLOBALS['my_cat']  = get_category(get_query_var('cat'));
  $GLOBALS['my_slug'] = $GLOBALS['my_cat']->slug;
  if(!is_slug('links')) {
    global $query_string, $wpdb, $wp_rewrite;
    $qs = $query_string;
    if(is_slug('forecasts')) {
      $replace = ($wp_rewrite->using_permalinks() ? 
        "category_name=". $GLOBALS['my_slug'] :
        "cat=". $GLOBALS['my_cat']->term_id);
      $with = "cat=". get_category_id_by_slug('forecasts_spain') .','. get_category_id_by_slug('forecasts_usa');
      $query_string = str_replace($replace, $with, $query_string);      
    }
    if(get_query_var('year') == "")
      $query_string .= "&year=". get_the_time('Y');
    if($qs != $query_string)
      query_posts($query_string); 
  }
?> 
<?php get_header(); ?>
<?php $first = true; ?>
<?php while (have_posts()) : the_post(); ?>
    <a class="item<?php if($first) {echo ' first'; $first = false;} ?>" href="<?php (is_slug('links') ? the_link() : the_permalink()) ?>" title="<?php the_title(); ?>">
			<?php the_thumbnail(75, 111); ?>
			<span class="halftitle">
			  <?php if(is_slug('forecasts')) the_cat(); ?>
			  <?php the_weekend(); ?>
			  <?php the_datestamp(); ?>
			</span>
			<big><?php the_title(); ?></big>
			<small><?php the_subtitle(); ?></small>
      <?php my_excerpt((is_slug('links') ? 1000 : 35), false, false, "img,p,font,a"); ?>
			</a>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
