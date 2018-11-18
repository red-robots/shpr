<?php
/**
 * Template Name: What We Do
 */

get_header(); ?>



			<?php while ( have_posts() ) : the_post(); ?>
				
                
              <div class="page-content clear">
            	
				<div class="container">
    				<div class="page-left">
                   
                  
     
                    
                    
                <div class="entry-content">
                
                <h1><?php the_title(); ?></h1>
                
                		<?php the_content(); ?>
                    
                  <?php endwhile; // end of the loop. ?>
                </div><!-- entry-content -->
                </div><!-- page-left -->
                
                <div class="page-right">
                    <div class="entry-content">
                    <?php
    				
    					// Get Which Site
    					if(is_tree(82)) { // If is The SMAT Tree
    						$whatsite = 'smatprograms';
    					} elseif(is_tree(84)) { // If is the MHPC Tree
    						$whatsite = 'programs';
    					}

    					
    					$temp = $wp_query;
    					$wp_query = null;
    					$wp_query = new WP_Query();
    					$wp_query->query(array(
    						'post_type'=> $whatsite,
    						'paged' => $paged,
    						'posts_per_page' => 10,
    					));
    					if ($wp_query->have_posts()) : ?>
                        
                        <h2>News Archives</h2>
                        
    					<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                        
                        	
                            
                            <div class="program-list">
                                <a href="<?php the_permalink(); ?>">
                                		<div class="program-list-image">
                                        	<?php if ( has_post_thumbnail() ) {
    													the_post_thumbnail('thumbnail');
    												} else { ?>
                                                    <img src="<?php bloginfo('template_url'); ?>/images/program-image-default.png" width="50px" height="50px"/>
                                            <?php } ?>
                                     </div><!-- program list image -->
                                     <div class="program-list-right">
                                     	<div class="program-list-title">
                                        	<?php the_title(); ?>
                                        </div><!-- program list title -->
                                        <div class="program-list-excerpt">
                                        	<?php echo excerpt(25); ?>
                                            <div class="clear"></div>
                                            <div class="program-list-readmore">Read More</div>
                                        </div><!-- program list title -->
                                     </div><!-- program list right -->
                                </a>
                            </div><!-- program list -->
                            
                   
                    
                    	<?php endwhile; ?>
                      <?php endif; ?>
                    </div><!-- entry-content -->
                </div><!-- page- right -->
                
            
                </div>
            </div><!-- page-content -->


<?php get_footer(); ?>