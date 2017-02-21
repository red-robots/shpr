<?php
/**
 * Template Name: Resources Page
 */

get_header(); ?>

<div class="page-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <div class="page-left">         
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div><!-- entry-content -->
        </div><!-- page left -->
        
        
        <div class="page-right">
            <div class="entry-content">
               <div class="resources-callout">
                <?php the_field('resources_right_side'); ?>
            	</div><!-- resources callout -->
            </div><!-- entry-content -->
        </div><!-- page right -->
        
        
    <?php endwhile; // end of the loop. ?>
    <?php endif; // end of the loop. ?>
</div><!-- page-content -->
<?php get_footer(); ?>