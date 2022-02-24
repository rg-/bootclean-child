<?php
$brand_alt = !empty($args['brand_alt']) ? $args['brand_alt'] : get_bloginfo('name');
$brand_link = !empty($args['brand_link']) ? $args['brand_link'] : get_bloginfo('url');
$brand_image = !empty($args['brand_image']) ? $args['brand_image'] : false; 

$brand_image_width = !empty($args['brand_image_width']) ? $args['brand_image_width'] : '';
$brand_image_height = !empty($args['brand_image_height']) ? $args['brand_image_height'] : '';
?>

<a class="navbar-brand position-relative z-index-20" href="<?php echo $brand_link; ?>">
	<span class="d-block" data-is-inview-fx="fadeInDown" data-transition-delay=".3s">
		<?php if(!empty($brand_image)){ ?>
		<img class="logo-black" width="<?php echo $brand_image_width; ?>" height="<?php echo $brand_image_height; ?>" src="<?php echo $brand_image; ?>" alt="<?php echo $brand_alt; ?>" data-affix-addclass=""/>
		<?php } else { ?>
			<?php echo $brand_alt; ?>
		<?php } ?>
	</span>
</a>