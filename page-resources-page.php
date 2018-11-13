<?php
/**
 * Template Name: Resources Page
 */

get_header(); ?>

<div class="page-content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>	
        <div class="page-left">         
            <div class="entry-content">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            </div><!-- entry-content -->
            
            <?php if( $classes = get_field('classes') ) { ?>
            <div id="list_classes" class="accordion-panel-wrap">
            <?php foreach($classes as $c) { 
                $c_title = $c['class_title'];
                $c_class = $c['class_'];
                if($c_title) { ?>
                <div class="panel class-info">
                    <div class="panel_title"><?php echo $c_title;?><a class="arrow"><i class="fa fa-caret-down"></i></a></div>
                    <div class="panel_text"><?php echo $c_class;?></div>
                </div>
                <?php } ?>
            <?php } ?>
            </div>    
            <?php } ?>
        </div><!-- page left -->
        
        <?php $resources = get_field('resources_right_side'); ?>
        <?php if($resources) { ?>
        <div class="page-right">
            <div class="entry-content">
                <div class="resources-callout">
                <?php echo $resources; ?>
            	</div>
            </div>
        </div>
        <?php } ?>    
        
        
    <?php endwhile; // end of the loop. ?>
    <?php endif; // end of the loop. ?>
</div><!-- page-content -->
<?php get_footer(); ?>