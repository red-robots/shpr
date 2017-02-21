<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="page-content">
<div class="page-left">
			<?php while ( have_posts() ) : the_post(); ?>
            
          <div class="entry-content">  
           <h1><?php the_title(); ?></h1>  
			<?php the_content(); ?>
			</div><!-- #content -->	

			<?php endwhile; // end of the loop. ?>

</div><!-- #page left -->


<div class="page-right">
   <div class="entry-content">
       <?php
				
			// Get Which Site
			if('smatprograms' == get_post_type()) { // If is The SMAT Tree
			$whatsite = 'smatprograms';
			} elseif('programs' == get_post_type()) { // If is the MHPC Tree
			$whatsite = 'programs';
			}


			$currentID = get_the_ID(); // get the current id of this post
		
			$wp_query = new WP_Query();
			$wp_query->query(array(
				'post_type'=> $whatsite,
				'paged' => $paged,
				'posts_per_page' => 5,
				'post__not_in'=> array( $currentID ), // put the post we don't won't in an array
			));
			if ($wp_query->have_posts()) : ?>
                    
           <h2>Program Highlights</h2>
                    
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


</div><!-- #content -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>