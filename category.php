<?php 
  $GLOBALS['my_cat']  = get_category(get_query_var('cat'));
  $GLOBALS['my_slug'] = $GLOBALS['my_cat']->slug;
  if(!is_slug('links')) {
    global $query_string, $wpdb, $wp_rewrite;
    $qs = $query_string;
    if(get_query_var('year') == "")
      $query_string .= "&year=". get_the_time('Y');
    if($qs != $query_string)
      query_posts($query_string); 
  }
  get_header();
  $first = true;
  while (have_posts()) : the_post();
   if(!is_forecast() || $first) {     
  ?>
    <a class="item<?php if($first) {echo ' first'; $first = false;} ?>" href="<?php (is_slug('links') ? the_link() : the_permalink()) ?>" title="<?php the_title(); ?>">
			<?php the_thumbnail(75, 111); ?>
			<span class="halftitle">
			  <?php if(is_forecast()) the_names(); ?>
			  <?php the_weekend(); ?>
			  <?php the_datestamp(); ?>
			</span>
			<big><?php the_title(); ?></big>
			<small><?php the_subtitle(); ?></small>
      <?php my_excerpt((is_slug('links') ? 1000 : 35), false, false, "img,p,font,a"); ?>
			</a>
<?php 
    }
  endwhile; 
  get_sidebar();
  get_footer(); ?>
