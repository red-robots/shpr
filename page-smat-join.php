<?php
/**
 * Template Name: How To Join
 */

get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
        <div class="page-content">
            
            <div class="page-left">
                <div class="entry-content">
                    <h1><?php the_title(); ?></h1>
                    <?php the_content(); ?>
                </div><!-- entry-content -->
            </div><!-- entry-content -->
        
        	<div class="page-right">
            <div class="entry-content">
               <div class="resources-callout">
                <?php the_field('join_right_side'); ?>
            	</div><!-- resources callout -->
            </div><!-- entry-content -->
        	</div><!-- page right -->
        
        
        </div><!-- page-content -->
    <?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>