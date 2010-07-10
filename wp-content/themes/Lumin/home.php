<?php get_header(); ?>
<?php if (get_option('lumin_featured') == 'on') include(TEMPLATEPATH . '/includes/featured.php'); ?>

<?php if (get_option('lumin_homedesc') <> '') { ?>
	<p id="slogan-phrase"><?php echo(get_option('lumin_homedesc')); ?></p>
<?php }; ?>

<?php include(TEMPLATEPATH . '/includes/default.php'); ?>

<?php get_footer(); ?>