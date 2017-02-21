<?php
/**
 * Template Name: News and Events
 */

get_header(); ?>


<div class="page-content">
<div class="entry-content">
<h1 class="newsevents"><?php the_title(); ?></h1>

<!--<div class="seefullcal"><a href="#calendar">See Full Calendar</a></div>-->

<?php 
				   
// Get Which Site
	if(is_tree(82)) { // If is The SMAT Tree
		$postType = 'post';
	} elseif(is_tree(84)) { // If is the MHPC Tree
		$postType = 'post';
	}
										   
				   
				   
	$args = array(
		'post_type' => $postType,
		'posts_per_page' => '-1',
		'meta_key' => 'event_start_date',
		'meta_value' => date("Y/m/d h:i A"),
		'meta_compare' => '>',
		'orderby' => 'meta_value',
		'order' => 'ASC'
		);
		$the_query = new WP_Query( $args );  
		 if ( $the_query->have_posts() ) : 
	 while ($the_query->have_posts()) : $the_query->the_post(); ?>	
				
				
               
<?php 
// Set some variables to set how to show the dates.
$startdate = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
$enddate = DateTime::createFromFormat('Ymd', get_field('event_end_date'));
?>
                
<div class="square-post-container blocks"> 
     
  	<?php
		
		if(in_category('mhpc-meetings')) { // If is The SMAT Tree) 
			$iconType = 'post-icon-meetings';
			$iconSet = 'post-icon-meetings';
			$colorType = 'color-black';
			$site ="mhpc";
		} elseif(in_category('meetings')) { // If is The MHPC Tree) 
			$iconType = 'post-icon-meetings';
			$iconSet = 'post-icon-meetings';
			$colorType = 'color-black';
			$site ="smat";
		} elseif(in_category('mhpc-events')) { // If is The SMAT Tree)
			$iconType = 'post-icon-events';
			$iconSet = 'post-icon-events';
			$colorType = 'color-black';
			$site ="mhpc";
		} elseif(in_category('events')) { // If is The MHPC Tree) 
			$iconType = 'post-icon-events';
			$iconSet = 'post-icon-events';
			$colorType = 'color-black';
			$site ="smat";
		} elseif(in_category('mhpc-notes')) { // If is The SMAT Tree)
			$iconType = 'post-icon-notes';
			$iconSet = 'post-icon-notes';
			$colorType = 'color-black';
			$site ="mhpc";
		} elseif(in_category('notes')) { // If is The MHPC Tree) 
			$iconType = 'post-icon-notes';
			$iconSet = 'post-icon-notes';
			$colorType = 'color-black';
			$site ="smat";
		}

?>
       
      <div class="<?php echo $iconType; ?> <?php echo $site; ?>-<?php echo $iconType; ?>">
      </div><!--  home post icon -->
       
               
     <div class="entry-content">
         <div class="post-date">
             <?php echo $startdate->format('M d'); ?>
					<?php if(get_field('event_end_date')!="") { 
							echo " " . "-" . " " . $enddate->format('M d'); 
					} ?>
          </div><!--post date -->
             
         <h2 class="newstitle"><?php the_title(); ?></h2>
            <?php
				global $more;
				$more = 0;
			  ?>
				<?php the_content(); ?>
      
                
      </div><!-- entry-content -->
 </div><!-- square post container -->
            
            
<?php endwhile; // end of the loop. ?>
            
<div class="clear"></div>
            
<?php pagi_posts_nav(); ?>
            
<?php endif; // end of the loop. ?>
            
<div class="clear"></div>

            
</div><!-- entry-content -->           
</div><!-- page-content -->
                
<?php get_footer(); ?>