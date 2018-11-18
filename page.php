<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>
	 <div class="page-content clear">
		
		<div class="container">
			<div class="entry-content">
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div><!-- entry-content -->
		</div>

	</div><!-- page-content -->
	<?php endwhile; // end of the loop. ?>
	
<?php get_footer(); ?>