<?php
/**
 * Template Name: Sitemap
 */

get_header(); ?>



			
				
                
              <div class="page-content">
              <?php while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
            
            <h1><?php the_title(); ?></h1>
            
            
                   <?php w//p_list_pages('exclude=36,2&title_li=' ); ?>
				<?php the_content(); ?>
                
                <?php wp_nav_menu( array( 'theme_location' => 'sitemap' ) ); ?>
                
            </div><!-- entry-content -->
            
<?php endwhile; // end of the loop. ?>

<?php wp_reset_postdata(); ?>

<div class="clear"></div>







</div><!-- page-content -->
                
			



<?php get_footer(); ?>