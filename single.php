<?php $cats = get_the_category(); $GLOBALS['my_cat'] = $cats[0]; $GLOBALS['my_slug'] = $GLOBALS['my_cat']->slug; ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
    	  <big><?php the_title(); ?></big>
      	<?php my_content(); ?>
      	<p class="firma"><?php the_author() ?></p>
      	<div id="fb-like">
          <fb:like href="<?php the_permalink(); ?>" show_faces="true" width="450" font=""></fb:like>
        </div>
        <?php the_navigation(); ?>
      	<!-- TO ADD: Print this article, tweet, etc. > Maybe on top as well -->
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
