<?php wp_reset_postdata(); ?>
<?php 
###############################

		// Bladen County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'bladen' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
    <div id='bladen' class="popups">
    <h3>Bladen County</h3> 
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
      		<div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
                   
        <?php endwhile; ?> 
        </div><!-- #burke -->
    </div><!-- display none --> 
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// Pender County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'pender' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='pender' class="popups">
         <h3>Pender County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #cleveland -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 


<?php 
###############################

		// Columbus County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'columbus' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='columbus' class="popups">
         <h3>Columbus County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #catawba -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// Brunswick County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'brunswick' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='brunswick' class="popups">
         <h3>Brunswick County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #lincoln -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 



<?php 
###############################

		// New Hanover County

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'new-hanover' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='new-hanover' class="popups">
         <h3>New Hanover County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #gaston -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// Onslow

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'onslow' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='onslow' class="popups">
         <h3>New Hanover County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #gaston -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

<?php 
###############################

		// Duplin

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => -1,
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'county', // Name when registering CT
					'field' => 'slug',
					'terms' => 'duplin' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	<div style='display:none'>
     <div id='duplin' class="popups">
         <h3>New Hanover County</h3>
<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
        
             
            <div class="popup">
                <div class="pop-title"><?php the_title(); ?></div>
                <div class="pop-address"><?php the_field('address'); ?></div>
                <div class="pop-phone"><?php the_field('phone#'); ?></div>
                <div class="pop-liason"><?php the_field('liason'); ?></div>
            </div><!-- popup -->
		
      
                   
        <?php endwhile; ?>
    </div><!-- #gaston -->
    </div><!-- display none -->  
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 

