<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="page-content">

			<?php while ( have_posts() ) : the_post(); ?>
            
          <div class="entry-content">  
           <h1><?php the_title(); ?></h1>  
			<?php the_content(); ?>
			</div><!-- #content -->	

			<?php endwhile; // end of the loop. ?>

</div><!-- #content -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>