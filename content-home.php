<!-- <?post_class();?> -->
<div class="col-sm-3">
	<h2><a href="<? the_permalink();?>"><?the_title();?></a></h2>
	<p class="postcat"><?the_category(' ');?></p>

	<p class="thumb">
<?if(has_post_thumbnail()) :
	the_post_thumbnail('thumbnail');
else:?>
		<img src="<?echo ASSETS_URL.'img';?>/no_image.jpg" alt="No Image" width="150" height="150"/>
<?endif;?>
	</p>

	<?the_excerpt();?>
	<p class="more"><a href="<?the_permalink();?>">계속보기</a></p>
	<p class="postinfo"><? echo get_the_date();?></p>
</div>
