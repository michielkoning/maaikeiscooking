<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php wp_head(); ?>
</head>
<body>

	<?php $recipes = new WP_Query( array( 'post_type' => 'recipe')); ?>
	<?php while ( $recipes->have_posts() ) : $recipes->the_post(); ?>
		<h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php the_field('ingredients'); ?>
		<?php the_field('preparation'); ?>
	<?php endwhile; ?>
	<?php wp_footer(); ?>

</body>
</html>
