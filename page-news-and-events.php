<?php
/**
 * Template Name: News and Events
 */

get_header(); ?>

<?php 
// get requested term
$cat = $_REQUEST['cat'];
if($cat == 'mhpc') {
	$catsmeow = 'mhpc-events';	
} elseif($cat == 'smat') {
	$catsmeow = 'events';	
} else {
	$catsmeow = 'events, mhpc-events';
}
?>

<!--<div class="events-left">
<div class="catlink"><a href="<?php the_permalink(); ?>">View All Events</a></div>
<div class="catlink"><a href="<?php the_permalink(); ?>?cat=mhpc">View MHPC Events</a></div>
<div class="catlink"><a href="<?php the_permalink(); ?>?cat=smat">View SMAT Events</a></div>
</div> events left -->


<div class="events-page-content">
<div class="entry-content">

<h1 class="newsevents"><?php the_title(); ?></h1>
<div class="eventtop"> 
<?php 
			   
	$args = array(
		'post_type' => 'post',
		'posts_per_page' => '-1',
		'meta_key' => 'event_start_date',
		'meta_value' => date("Y/m/d h:i A"),
		'meta_compare' => '>',
		'orderby' => 'meta_value',
		'order' => 'ASC',
		//'category_name' => array($catsmeow,)
		);
		$the_query = new WP_Query( $args );  
		 if ( $the_query->have_posts() ) : 
	 while ($the_query->have_posts()) : $the_query->the_post(); ?>	
				
				
               
<?php 
// Set some variables to set how to show the dates.
$startdate = DateTime::createFromFormat('Ymd', get_field('event_start_date'));
$enddate = DateTime::createFromFormat('Ymd', get_field('event_end_date'));
// add link to more info
$getTitle = get_the_title(); 
$linkdown = sanitize_title_with_dashes($getTitle);
?>
                
<div class="eventposttop"> 
  <a href="#<?php echo $linkdown; ?>">
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
       
      
       
               
     <div class="entry-content">
         <div class="post-date">
             <?php echo $startdate->format('M d'); ?>
					<?php if(get_field('event_end_date')!="") { 
							echo " " . "-" . " " . $enddate->format('M d'); 
					} ?>
          </div><!--post date -->
          
          <div class="<?php echo $iconType; ?> <?php echo $site; ?>-<?php echo $iconType; ?>">
      		</div><!--  home post icon -->
             
         <h2 class="newstitle"><?php the_title(); ?></h2>
            
            <div class="linkdown">&raquo;</div>
      
                
      </div><!-- entry-content -->
      </a>
 </div><!-- square post container -->

 <div class="clear"></div>
            
            
<?php endwhile; // end of the loop. ?>

            
<?php endif; wp_reset_postdata(); wp_reset_query(); // end of the loop. ?>
            
<div class="clear"></div>

 </div><!-- event otp -->

<?php 
			   
	$args = array(
		'post_type' => 'post',
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
// add link to more info
$getTitle = get_the_title(); 
$linkdown = sanitize_title_with_dashes($getTitle);
?>
                
<div class="eventpostbottom"> 
     
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
       
      <div id="<?php echo $linkdown; ?>" class="<?php echo $iconType; ?> <?php echo $site; ?>-<?php echo $iconType; ?>">
      </div><!--  home post icon -->
       
               
     <div class="entry-content">
         <div class="post-date-bot">
             <?php echo $startdate->format('M d'); ?>
					<?php if(get_field('event_end_date')!="") { 
							echo " " . "-" . " " . $enddate->format('M d'); 
					} ?>
          </div><!--post date -->
             
         <h2 class="newstitle-bot"><?php the_title(); ?></h2>
         <div class="clear"></div>
            <?php
				global $more;
				$more = 0;
			  ?>
				<?php the_content(); ?>
      
                
      </div><!-- entry-content -->
 </div><!-- square post container -->


<?php endwhile; // end of the loop. ?>
<?php endif; // end of the loop. ?>

            
</div><!-- entry-content -->           
</div><!-- page-content -->
                
<?php get_footer(); ?>