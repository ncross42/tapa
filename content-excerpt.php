<!-- <?post_class();?> -->
<div class="col-sx-12 col-sm-6 col-md-4 col-lg-3">
	<h2><a href="<? the_permalink();?>"><?the_title();?></a></h2>
	<p class="postcat">
<?php echo get_the_term_list( $post->ID, 'hierarchy', '지역: ', ', ', '' ); ?>
<br>
<?php echo get_the_term_list( $post->ID, 'topic', '주제: ', ', ', '' ); ?>
</p>

	<p class="thumb">
<?if(has_post_thumbnail()) :
	the_post_thumbnail('thumbnail');
else:?>
		<img src="<?echo ASSETS_URL.'img';?>/no_image.jpg" alt="No Image" width="100" height="100"/>
<?endif;?>
	</p>

	<?the_excerpt();?>
	<p class="more"><a href="<?the_permalink();?>">계속보기</a></p>
	<p class="postinfo"><? echo get_the_date();?></p>
</div>
