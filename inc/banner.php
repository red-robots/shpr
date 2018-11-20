<?php
$slides = get_field('slider_images');
?>
<?php if($slides) { ?>
<div class="bannerWrapper clear">
	<div class="banner-slides clear">
		<ul id="slideshow" class="rslides clear">
		<?php foreach($slides as $ss) { 
			$image = $ss['slide_image'];
			$caption = $ss['slide_caption'];
			if( $image ) { ?>
			<li class="slide">
				<div class="banner-image clear">
					<img src="<?php echo $image['url'];?>" alt="<?php echo $image['title'];?>" />
				</div>
				<?php if($caption) { ?>
				<div class="banner-caption">
					<div class="caption"><?php echo $caption;?></div>
				</div>
				<?php } ?>
			</li>
			<?php } ?>
		<?php } ?>
		</ul>
		<div class="cycle-pager"></div>
		<a href="#" class="prev_slide slidenavi"><span><i class="fas fa-chevron-left"></i></span></a>
		<a href="#" class="next_slide slidenavi"><span><i class="fas fa-chevron-right"></i></span></a>
	</div>
</div>
<?php } ?>