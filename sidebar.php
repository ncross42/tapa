<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
<?php
/*
if( function_exists('dob_get_sub_categories') ) {
	$categories = dob_get_sub_categories();
	if ( ! empty($categories) ) {
		$html = '<ul class="offcanvas_side">';
		foreach ( $categories as $c ) {
			$html .= "<li><a href='/$taxonomy/{$c->slug}'>{$c->name}</a></li>";
		}
		echo $html .= '</ul>';
	}
} else file_put_contents('/tmp/no_func.err','no function dob_get_sub_categories');
 */
?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>
