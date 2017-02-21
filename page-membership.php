<?php
/**
 * Template Name: Membership
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>
		
        <div class="page-content">
            	
            <div class="entry-content">
            
            	<h1><?php the_title(); ?></h1>
                
                <?php if(is_page(963)) : // Registration page ?>
                    <?php wp_register(); ?>
                <?php endif; ?>
                
                <?php //if(is_page(352)) : ?>
                	<?php //wp_login_form(); ?>
                 <!--   <h2>Registration</h2>
                    <p>If you wish to register for this site, Please click the link below.</p>
                    <p><?php //wp_register(); ?></p>-->
                <?php //endif; ?>
            
            	<?php the_content(); ?>
                
                <?php //echo do_shortcode('[wppb-register]'); ?>
                
            </div><!-- entry-content -->
            
        </div><!-- page-content -->
                
<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>