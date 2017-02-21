<?php
/**
 * Template Name: Leadership
 */

get_header(); ?>
<div class="page-content">



<div class="entry-content">
<h1><?php the_title(); ?></h1>

<h2>MHPC Staff</h2>
<?php


$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=>'leadership',
	'paged' => $paged,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'leadershiptype',
			'field' => 'slug',
			'terms' => 'mhpc-staff'
		)
	)
	
));

while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<?php 
$taxonomy  = 'leadershiptype';
$terms = get_the_terms( $post->ID, $taxonomy );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
    
}
?>



<div class="blog-square <?php echo $term->slug; ?>">

<div class="leadership-picture">
	<?php if(get_field('picture')!="") { ?>
    	<img src="<?php the_field('picture'); ?>" />
    <?php } else { ?>
    	<img src="<?php bloginfo('template_url'); ?>/images/profile.png" />
    <?php } ?>
</div><!-- leadership picture -->
<div class="leadership-name"><?php the_title(); ?></div>
<div class="leadership-title"><?php the_field('title'); ?></div>
<div class="leadership-bio"><?php the_field('bio'); ?></div>

</div><!-- blog square  -->
<?php endwhile; /*endif;*/ wp_reset_postdata(); ?>

<h2>MHPC Steering Committee</h2>

<?php


$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query(array(
	'post_type'=>'leadership',
	'paged' => $paged,
	'posts_per_page' => -1,
	'tax_query' => array(
		array(
			'taxonomy' => 'leadershiptype',
			'field' => 'slug',
			'terms' => 'mhpc-steering-committee'
		)
	)
	
));

while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

<?php 
$taxonomy  = 'leadershiptype';
$terms = get_the_terms( $post->ID, $taxonomy );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
    
}
?>



<div class="blog-square <?php echo $term->slug; ?>">

<div class="leadership-picture">
	<?php if(get_field('picture')!="") { ?>
    	<img src="<?php the_field('picture'); ?>" />
    <?php } else { ?>
    	<img src="<?php bloginfo('template_url'); ?>/images/profile.png" />
    <?php } ?>
</div><!-- leadership picture -->
<div class="leadership-name"><?php the_title(); ?></div>
<div class="leadership-title"><?php the_field('title'); ?></div>
<div class="leadership-bio"><?php the_field('bio'); ?></div>

</div><!-- blog square  -->
<?php endwhile; /*endif;*/ wp_reset_postdata(); ?>
















</div><!-- entry content -->
 

</div><!-- page-content -->
<?php get_footer(); ?>