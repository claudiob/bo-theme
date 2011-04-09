<?php $cats = get_the_category(); $GLOBALS['my_cat'] = $cats[0]; $GLOBALS['my_slug'] = $GLOBALS['my_cat']->slug; ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    	  <big><?php the_title(); ?></big>
      	<?php my_content(); ?>
      	<p class="firma"><?php the_author() ?></p>
      	<div id="fb-like">
  				<iframe src="http://www.facebook.com/plugins/like.php?href=<?php echo urlencode(get_permalink()) ?>&amp;layout=standard&amp;show_faces=true&amp;width=450&amp;action=like&amp;font&amp;colorscheme=light&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
        </div>
        <?php the_navigation(); ?>
      	<!-- TO ADD: Print this article, tweet, etc. > Maybe on top as well -->
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
