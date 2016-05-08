<?php
/**
 * Filter the default twentysixteen custom header sizes attribute.
 *
 * @since Twenty Sixteen 1.0
 *
 * @param string $custom_header_sizes sizes attribute
 * for Custom Header. Default '(max-width: 709px) 85vw,
 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
 */
$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
?>
<div id="homepage-feature" class="carousel slide">
	<ol class="carousel-indicators">
		<li data-target="#homepage-feature" data-slide-to="0" class="active"></li>
		<li data-target="#homepage-feature" data-slide-to="1" ></li>
	</ol>

	<!-- inner -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="<?php header_image(); ?>" 
				srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" 
				sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" 
				width="<?php echo esc_attr( get_custom_header()->width ); ?>" 
				height="<?php echo esc_attr( get_custom_header()->height ); ?>" 
				alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
			>
		</div>
		<div class="item ">
			<!--img src="<? echo ASSETS_URL;?>img/no_image.jpg" alt="no_image"-->
			<h1>WHAT THE~!!!<h1>
<?php
$a = get_uploaded_header_images();
echo '<pre>'.print_r($a,true).'</pre>';
 
/*Array (
	[165] => Array (
		[attachment_id] => 165
		[url] => http://wp1.youthpower.kr/wp-content/uploads/2016/05/cropped-slide1-e1462430776488.png
		[thumbnail_url] => http://wp1.youthpower.kr/wp-content/uploads/2016/05/cropped-slide1-e1462430776488.png
		[alt_text] => 
		[width] => 1200
		[height] => 279
	)
	[167] => Array (
		[attachment_id] => 167
		[url] => http://wp1.youthpower.kr/wp-content/uploads/2016/05/1200x280_1.png
		[thumbnail_url] => http://wp1.youthpower.kr/wp-content/uploads/2016/05/1200x280_1.png
		[alt_text] => 
		[width] => 1200
		[height] => 280
	)
)*/
?>
		</div>
	</div>

	<!-- Controls -->
	<a class="left carousel-control" href="#homepage-feature" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
	</a>
	<a class="left carousel-control" href="#homepage-feature" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
	</a>
</div>
