<? get_header(); ?>

<div class="container">

<p class="title">RECENT POST</p>
<div class="row">
<?
$sql_recent_all = array (
	'post_per_page' => 5,
	'ignore_sticky_posts' => 1,
	'post_type' => 'post'
);
query_posts($sql_recent_all);
if(have_posts()): while(have_posts()) : the_post();
	get_template_part('content','home');
endwhile; endif;
?>
</div>

<p class="title">RECENT OFFER</p>
<div class="row">
<?
$sql_recent_all = array (
	'post_per_page' => 5,
	'ignore_sticky_posts' => 1,
	'post_type' => 'offer'
);
query_posts($sql_recent_all);
if(have_posts()): while(have_posts()) : the_post();
	get_template_part('content','excerpt');
endwhile; endif;
?>
</div>


<p class="title">RECENT MINE</p>
<?
/*
$q1 = [
	'posts_per_page'=>5,
	'ignore_sticky_posts=1',
	'tax_query' => [
		['taxonomy'=>'post_format'
		,'field'=>'slug'
		,'terms'=>'post-format-status'
		,'operator'=>'NOT IN']
	]
];
query_posts($q1);
if(have_posts()): while(have_posts()): 
	the_post();
	get_template_part('content','home');
endwhile; endif;
 */
?>

<? # get_sidebar(); ?>

</div> <!-- container -->

<? get_footer(); ?>
