<?php
/*
Template Name: Mail_List
*/

get_header(); ?>

	<div id="content" class="narrowcolumn" role="main">

<?php 
if (class_exists('MailPress'))
{
	MailPress::require_class('Query');
	$mails = new MP_Query();
	$args = array();
	$mails->query(args);
}

?>

	<?php if (isset($mails) && $mails->have()) : ?>

		<?php while ($mails->have()) : $mails->the_mail(); ?>

			<div <?php $mails->class() ?> id="mail-<?php $mails->the_ID(); ?>">
				<h2><a href="<?php $mails->the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php $mails->the_subject(); ?>"><?php $mails->the_subject(); ?></a></h2>
				<small><?php $mails->the_time('F jS, Y') ?> <!-- by <?php $mails->the_author() ?> --></small>
			</div>

		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php $mails->next_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php $mails->previous_link('Newer Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<p class="center">Sorry, but you are looking for something that isn't here.</p>
		<?php get_search_form(); ?>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
