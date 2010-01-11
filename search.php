<?php get_header(); ?>
<?php $first = true; ?>
<?php if (have_posts()) :?>
  <?php while (have_posts()) : the_post(); ?>
  <?php $cats = get_the_category(); $slug = $cats[0]->slug; ?>
      <a class="item <?php echo get_class_by_slug($slug); if($first) {echo ' first'; $first = false;} ?>" href="<?php the_permalink() ?>" title="<?php echo strip_tags(get_the_title()); ?>">
  			<?php the_thumbnail(75, 111); ?>
  			<span class="halftitle">
  			  <?php the_cat(); ?>
  			  <?php the_weekend(); ?>
  			  <?php the_datestamp(); ?>
  			</span>
  			<big><?php the_title(); ?></big>
  			<small><?php the_subtitle(); ?></small>
        <?php my_excerpt(35, false, false, "img,p,font,a", true); ?>
  		</a>
  <?php endwhile; ?>
	<?php else : ?>
      <p>No se encontr&oacute; ninguna p&aacute;gina con los t&eacute;rminos de tu b&uacute;squeda.</p>
	<?php endif; ?>
<!-- to ADD: pagination by search page -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

