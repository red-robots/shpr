<?php
/**
 * Template Name: Products 
 */

get_header(); ?>



			<?php while ( have_posts() ) : the_post(); ?>
				
                
              <div class="page-content">
            	
				
				
               
              
 
                
                
            <div class="entry-content">
            
            <h1><?php the_title(); ?></h1>
            
            
<?php if(get_field('products')): ?>
	<?php while(has_sub_field('products')): ?>
         <div class="product-row">
         		<div class="product-pic-cont">
         		<div class="product-pic">
                <?php if(get_sub_field('product_link')!="") { ?>
                	<a href="<?php the_sub_field('product_link'); ?>">
                <?php } ?>
            			<img src="<?php the_sub_field('product_image'); ?>" />
                <?php if(get_sub_field('product_link')!="") { ?>
                	</a>
                <?php } ?>
                
               </div><!-- product image -->
               </div><!-- product image cont -->
               <div class="product-description">
            		<?php the_sub_field('product_description'); ?>
                    <div class="clear"></div>
                <?php if(get_sub_field('product_link')!="") { ?>
                <div class="product-link"><a href="<?php the_sub_field('product_link'); ?>">Buy Product</a></div>
                <?php } ?>
               </div><!-- product row -->
         </div><!-- product row -->
    <?php endwhile; ?>
<?php endif; ?>
            
            
            
            </div><!-- entry-content -->
            
            </div><!-- page-content -->
                
                
                
				<?php // comments_template( '', true ); ?>
			<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>