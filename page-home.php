<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>



            
            
            <div class="page-content">
   <!-- 
  ############################    News & Events
  -->         	
				<div class="home-extra1 blocks">
                	<h2 class="hometitle1"><a href="<?php bloginfo('url'); ?>/news-and-events/events">Events</a></h2>
                   <?php 
				   
				   // Get Which Site
						if(is_tree(82)) { // If is The SMAT Tree
							$whatsite = 'post';
						} elseif(is_tree(84)) { // If is the MHPC Tree
							$whatsite = 'post';
						} else {$whatsite = 'post';}
										   
				   
				   
						$args = array(
							'post_type' => $whatsite,
							'posts_per_page' => '4',
							'meta_key' => 'event_start_date',
							'meta_value' => date("Y/m/d h:i A"),
							'meta_compare' => '>',
							'orderby' => 'meta_value',
							'order' => 'ASC'
						);
						$the_query = new WP_Query( $args );  ?>
					<?php if ( $the_query->have_posts() ) : 
					
					/*if( in_category(37) ) {
						$cat = 'sehpc-events';
					} else if( in_category(38) ) {
						$cat = 'sehpc-meetings';
					} else if( in_category(39) ) {
						$cat = 'sehpc-notes';
					} else if( in_category(1) ) {
						$cat = 'events';
					} else if( in_category(4) ) {
						$cat = 'meetings';
					} else if( in_category(26) ) {
						$cat = 'notes';
					}*/
					
					
					?>
                    
                    <div class="home-post-container">
                    
                    
                   <?php if('yes' == get_field('turn_alert_message_on', 'option') )  : ?> 
                    <div class="home-post">
                             
                                 <div class="icon-alerts mhpc-post-icon-alerts">
                                 </div><!--  home post icon -->
                                 
                                 <div class="home-post-right">
                                     <div class="home-post-date">
                                    	<span class="<?php echo $colorType; ?>" >
												Important Alert
                                        </span>
                                     </div><!-- home post date -->
                                    <div class="home-post-title">
                                           <span class="color-red"><?php the_field('bottom_alert_message', 'option'); ?></span>
                                    </div><!-- home post title -->
                                </div><!-- home post right -->
                          	
                          </div><!-- home post -->
                          
                   <?php endif; // end if message is turned on. ?>
                          
                          
                          
                    
					<?php while ( $the_query->have_posts() ) : ?>
                  <?php $the_query->the_post(); ?>
                  
                  	
                    		<?php
								if(in_category('meetings')) { // If is The SMAT Tree) 
									$iconType = 'smat-post-icon-meetings';
									$iconSet = 'icon-meetings';
									$colorType = 'color-black';
								}
								elseif(in_category('sehpc-meetings')) { // If is The MHPC Tree) 
									$iconType = 'mhpc-post-icon-meetings';
									$iconSet = 'icon-meetings';
									$colorType = 'color-black';
								}
								elseif(in_category('events')) { // If is The SMAT Tree)
									$iconType = 'smat-post-icon-events';
									$iconSet = 'icon-events';
									$colorType = 'color-black';
								}
								elseif(in_category('sehpc-events')) { // If is The MHPC Tree) 
									$iconType = 'mhpc-post-icon-events';
									$iconSet = 'icon-events';
									$colorType = 'color-black';
								}
								elseif(in_category('notes')) { // If is The SMAT Tree)
									$iconType = 'smat-post-icon-notes';
									$iconSet = 'icon-notes';
									$colorType = 'color-black';
								}
								elseif(in_category('sehpc-notes')) { // If is The MHPC Tree) 
									$iconType = 'mhpc-post-icon-notes';
									$iconSet = 'icon-notes';
									$colorType = 'color-black';
								}
								
								
	// get raw date
$startdate = get_field('event_start_date', false, false);
$enddate = get_field('event_end_date', false, false);


// make date object
$startdate = new DateTime($startdate);
$enddate = new DateTime($enddate);
							?>
                            
                            <?php //if ( $the_query->have_posts() ) : ?>
                           <div class="home-post">
                                 <div class="<?php echo $iconSet; ?> <?php echo $iconType; ?>">
                                 </div><!--  home post icon -->
                                 
                                 <div class="home-post-right">
                                     <div class="home-post-date">
                                    	<span class="<?php echo $colorType; ?>" >
					<?php if($startdate != '') {echo $startdate->format('M d');} ?>
					<?php if(get_field('event_end_date')!="") { 
													echo " " . "-" . " " . $enddate->format('M d'); 
												} ?>
                                        </span>
                                     </div><!-- home post date -->
                                    <div class="home-post-title">
                                           <span class="<?php echo $colorType; ?>"><?php the_title(); ?></span>
                                    </div><!-- home post title -->
                                </div><!-- home post right -->
                          	
                          </div><!-- home post -->
                      <?php //else: ?>
                     <!-- There are currently no upcoming Events.-->
                      <?php //endif; ?>
                      
                  
                  <?php endwhile; ?>
                  </div><!-- home post container -->
                  <?php endif; ?>
                  <?php wp_reset_postdata(); ?>
                  
                  	<div class="home-more-link color-green">
                    		<a href="<?php bloginfo('url'); ?>/news-and-events/events">VIEW ALL EVENTS</a>
                      </div><!-- home more link -->
               </div><!-- home extras -->
               
              
 <?php if(have_posts()) : while(have_posts()) : the_post(); ?>             
  <!-- 
  ############################    Our Service Area
  -->            
              
               <div class="home-extra2 blocks">
                	<h2 class="hometitle2"><a href="<?php the_field('service_area_link'); ?>">Our Service Area</a></h2>
                    
                    <div class="service-text sintony"><?php the_field('service_area_text'); ?></div>
                    <div class="service-image">
                    	  <a href="<?php the_field('service_area_link'); ?>">
							<img src="<?php the_field('service_area_image'); ?>" />
                       </a>
                     </div><!-- service image -->
                    
                    <div class="home-more-link color-purple">
                    		<a href="<?php the_field('service_area_link'); ?>">LEARN MORE ABOUT WHO WE SERVE</a>
                      </div><!-- home more link -->
               </div><!-- home extras -->
               
    <?php endwhile; ?>
<?php endif; // end have_posts() check to run the rest of the page ?> 
<?php wp_reset_postdata(); ?>          
  <!-- 
  ############################    Program Highlights
  -->           
               
               
               <div class="home-extra3 blocks">
                	
                    
                    <?php 
				   
				   // Get Which Site
						if(is_tree(82)) { // If is The SMAT Tree
							$whatprogram = 'smatprograms';
							$sitelink = 'smat';
						} elseif(is_tree(84)) { // If is the MHPC Tree
							$whatprogram = 'programs';
							$sitelink = 'mhpc';
						}
										   
				   
				   
						$args = array(
							'post_type' => $whatprogram,
							'posts_per_page' => '1'
						);
						$the_query = new WP_Query( $args );  ?>
						 <h2 class="hometitle3">
                        	<a href="<?php bloginfo('url'); ?>/<?php echo $sitelink; ?>/news-events/news">News</a>
                        </h2>
						<?php if ( $the_query->have_posts() ) : ?>
                       
                    <?php while ( $the_query->have_posts() ) : ?>
                    <?php  $the_query->the_post(); ?>
                    <div class="home-program-container">
                    
                    	<div class="home-program-title carrious">
							<?php the_title(); ?>
                      </div><!-- home program excerpt -->
                        
                        <div class="home-program-excerpt sintony">
							<?php echo excerpt(25); ?>
                      </div><!-- home program excerpt -->
                      
                      <div class="clear"></div>
                      
                      <div class="service-image">
                      <?php 
					  // check if the post has a Post Thumbnail assigned to it.
								if ( has_post_thumbnail() ) {
									the_post_thumbnail('homepage');
								} 
								?>
                      </div><!-- service image -->
                    
                    </div><!-- home program container -->
                    
                    <?php endwhile; ?>
                    <?php endif; ?>
                   	
                    
                    
                    <div class="home-more-link color-blue">
                    		<a href="<?php bloginfo('url'); ?>/<?php echo $sitelink; ?>/news-events/news">CONTINUE READING</a>
                      </div><!-- home more link -->
               </div><!-- home extras -->
				
                
       	
            
            </div><!-- page-content -->
            
            

        
        

		


<?php get_footer(); ?>
