<?php global $post; $GLOBALS['my_page'] = get_page($post->ID); $GLOBALS['my_slug'] = $GLOBALS['my_page']->post_name; ?>
<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
        <big><!--<?php the_title(); ?>--></big>
      	<?php my_content(); ?>
<?php endwhile; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
