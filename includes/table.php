<div id="table">

<?php 
###############################

		// Hospitals

###############################
?>


<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'hospitals' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header">Hospitals</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell blocks">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <div class="cell-phone"><?php the_field('phone#'); ?></div>
                <div class="cell-liason"><?php the_field('liason'); ?></div>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 




<?php 
###############################

		// EMS Agencies

###############################
?>

<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'ems-agencies' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header">EMS Agencies</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell blocks">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <div class="cell-phone"><?php the_field('phone#'); ?></div>
                <div class="cell-liason"><?php the_field('liason'); ?></div>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 






<?php 
###############################

		// Emergency Management

###############################
?>


<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'emergency-management' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header">Emergency Management</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell blocks">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <div class="cell-phone"><?php the_field('phone#'); ?></div>
                <div class="cell-liason"><?php the_field('liason'); ?></div>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  
<?php wp_reset_postdata(); ?> 




<?php 
###############################

		// Public Health

###############################
?>


<?php 
$args = array(
	'post_type' => 'organizations',
	'posts_per_page' => '-1',
	'tax_query' => array(  //Custom Taxonomy 
				array(       // array within an array
					'taxonomy' => 'organization', // Name when registering CT
					'field' => 'slug',
					'terms' => 'public-health' // slug created by WP when you make your entry
				)
			)
);
$the_query = new WP_Query( $args );  ?>
<?php if ( $the_query->have_posts() ) : ?>
	
    <div class="column">
    <div class="column-header">Public Health</div><!-- column header -->
		<?php while ( $the_query->have_posts() ) : ?>
        <?php  $the_query->the_post(); ?>
                    
            <div class="cell blocks">
				<div class="cell-title"><?php the_title(); ?></div>
                <div class="cell-address"><?php the_field('address'); ?></div>
                <div class="cell-phone"><?php the_field('phone#'); ?></div>
                <div class="cell-liason"><?php the_field('liason'); ?></div>
			</div><!-- cell -->    
                    
        <?php endwhile; ?> 
	</div><!-- column -->           
<?php endif; ?>  


         

</div><!-- table -->