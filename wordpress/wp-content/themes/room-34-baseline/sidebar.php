<?php
if (is_page()) {
	// Retrieve parent page navigation
	global $wp_query;
	if(empty($wp_query->post->post_parent)) {
		$parent = get_the_ID();
		$parent_title = get_the_title();
	}
	else {
		$parent = $wp_query->post->post_parent;
		$parent_data = get_post($parent);
		$parent_title = $parent_data->post_title;
	}
	$wp_list_pages = wp_list_pages('title_li=&depth=1&child_of=' . $parent . '&echo=0');
}
?>
	<div id="sidebar" role="complementary" class="span-5 last">
		<ul>
			<?php
			if (is_page() && !empty($wp_list_pages)) {
				?>
				<!-- Page/section navigation -->
				<li>
					<h2><?php echo $parent_title; ?></h2>
					<ul role="navigation">
						<?php echo $wp_list_pages; ?>
					</ul>
				</li>
			<?php
			}
			if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) {
				?>
				<!-- Search form -->
				<li><?php get_search_form(); ?></li>
				
				<!-- Categories list -->
				<?php wp_list_categories('show_count=1&title_li=<h2>Categories</h2>&hierarchical=0'); ?>
				
				<!-- Tag cloud -->
				<li>
					<h2>Tags</h2>
					<div><?php wp_tag_cloud('smallest=75&largest=175&unit=%'); ?></div>
				</li>
				
				<!-- Archives list -->
				<li>
					<h2>Archives</h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
				</li>
				
				<!-- Bookmarks (links) list -->
				<?php wp_list_bookmarks(); ?>
				
				<!-- Meta links -->
				<li>
					<h2>Meta</h2>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</li>
				<?php
			}
			?>
		</ul>
	</div><!-- id="sidebar" -->
