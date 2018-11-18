<?php
$banner = get_field('banner_image');
?>
<?php if($banner) { ?>
<div class="bannerWrapper clear">
  <div class="banner-image clear">
    <img src="<?php echo $banner['url'];?>" alt="<?php echo $banner['title'];?>" />
  </div>
  <div class="banner-caption hide">
    <div class="caption"></div>
  </div>
</div>
<?php } ?>