<? get_header(); ?>

<div class="container">

<p class="title">최근 비밀투표</p>
<div class="row">
<?
$sql_recent_all = array (
	'post_per_page' => 5,
	'ignore_sticky_posts' => 1,
	'post_type' => 'elect'
);
query_posts($sql_recent_all);
if(have_posts()): while(have_posts()) : the_post();
	get_template_part('content','excerpt');
endwhile; endif;
?>
</div>

<p class="title">최근 공개발의</p>
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

<p class="title">최근 포스트</p>
<div class="row">
<?
$sql_recent_all = array (
	'post_per_page' => 5,
	'ignore_sticky_posts' => 1,
	'post_type' => 'post'
);
query_posts($sql_recent_all);
if(have_posts()): while(have_posts()) : the_post();
	get_template_part('content','excerpt');
endwhile; endif;
?>
</div>

<p class="title">test</p>
<div class="row">
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
</div>

<? # get_sidebar(); ?>

</div> <!-- container -->

<? get_footer(); ?>
