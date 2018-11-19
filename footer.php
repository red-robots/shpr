<?php
/**
 * The template for displaying the footer.
 *
 */
?>
</div><!-- #main .wrapper -->
<?php 
$current_segment = get_site_type();
$social['facebook'] = get_field('facebook_link','option');
$social['twitter'] = get_field('twitter_link','option');
$social['linkedin'] = get_field('linkedin_link','option');
$social['youtube'] = get_field('youtube_link','option');

$icon['facebook'] = 'fab fa-facebook-f';
$icon['twitter'] = 'fab fa-twitter';
$icon['linkedin'] = 'fab fa-linkedin-in';
$icon['youtube'] = 'fab fa-youtube';

$social_links = ($social && array_filter($social)) ? array_filter($social) : '';

$footer_information_left = get_field('footer_information_left','option');
$footer_information_right = get_field('footer_information_right','option');

$contact_information_title_1 = get_field('contact_information_title_1','option');
$contact_information_1 = get_field('contact_information_1','option');

$contact_information_title_2 = get_field('contact_information_title_2','option');
$contact_information_2 = get_field('contact_information_2','option');

$contact_information_title_3 = get_field('contact_information_title_3','option');
$contact_information_3 = get_field('contact_information_3','option');

$contact_information_title_4 = get_field('contact_information_title_4','option');
$contact_information_4 = get_field('contact_information_4','option');

$columns[] = array('title'=>$contact_information_title_1,'content'=>$contact_information_1);
$columns[] = array('title'=>$contact_information_title_2,'content'=>$contact_information_2);
$columns[] = array('title'=>$contact_information_title_3,'content'=>$contact_information_3);
$columns[] = array('title'=>$contact_information_title_4,'content'=>$contact_information_4);
?>
<?php if($current_segment) { ?>
<div class="footer-content clear">
	<div class="inner-pad">
		<div class="container">
			<div class="foot-col col-1">
				<div class="col-title"><?php echo $footer_information_left;?></div>
				<?php if($social_links) { ?>
				<ul class="footer-social">
				<?php foreach($social_links as $k=>$link) {  ?>
					<li><a href="<?php echo $link;?>" target="_blank"><i class="<?php echo $icon[$k]?>"></i></a></li>
				<?php } ?>
				</ul>
				<?php } ?>
			</div>

			<div class="foot-col col-2">
				<div class="col-title"><?php echo ($footer_information_right) ? nl2br($footer_information_right):'';?></div>
			</div>

			<div class="information">
				<div class="row clear">
				<?php $i=1; foreach($columns as $col) { 
					$title = $col['title'];
					$content = $col['content']; ?>
					<?php if( $title && $content ) { ?>
					<div class="info<?php echo ($i==1)?' first':'';?>">
						<div class="pad clear">
							<h3 class="f-title"><?php echo $title;?></h3>
							<?php echo $content;?>
						</div>
					</div>
					<?php $i++; } ?>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
</div><!-- site-->

<?php wp_footer(); ?>

<?php the_field('google_analytics','option'); ?>
</body>
</html>