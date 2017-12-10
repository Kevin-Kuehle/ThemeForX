<?php
/*
 Template Name: Impressum
*/ ?>
<?php get_header(); ?>
<div class="siteTitle impressum">
    <h1><?php echo get_the_title(); ?></h1>
</div>
<main>

	<?php

	if ( have_posts() ) :
		while ( have_posts() ) : the_post();
			the_content();
		endwhile;
	endif;

	?>

</main>
<?php get_footer(); ?>
