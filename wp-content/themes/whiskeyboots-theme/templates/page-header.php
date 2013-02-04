<div class="page-header">
<?php if (is_page()) { ?>
<div class="banner">
	<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'featured_image' ); } ?>
	<div class="bannertext">
		<?php the_title();?>
	</div>
</div>
<?php } ?>
</div>