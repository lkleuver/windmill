<?php get_header(); ?>

	<div id="content" role="main" class="span-17 colborder">

	<?php
	if (have_posts()) {
		while (have_posts()) {
			the_post();
			?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<?php
				if (get_post_meta($id, 'show_headline', true) !== '0') {
					echo '<h1>'; the_title(); echo '</h1>';
				}

				if (!is_page()) {
					?>
					<p class="postmetadata">
						<?php the_time(get_option('date_format')); ?> by <?php the_author(); ?>
					</p>
					<?php
				}
				?>

				<div class="entry">
					<?php the_content('Read more &raquo;'); ?>
				</div>
				
				<?php wp_link_pages(); ?>

				<p class="postmetadata">
					<?php
					if (!is_page()) {
						the_tags('Tags: ', ', ', '<br />');
						?>
						Categories: <?php the_category(', ') ?> &#8226;
						<?php
					}
					?>
					<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Permalink</a> &#8226;
					<?php
					edit_post_link('Edit', '', ' &#8226; ');
					comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;');
					?>
				</p>
				<?php
				if (file_exists(TEMPLATEPATH . '/share.php')) {
					include(TEMPLATEPATH . '/share.php');
				}
				?>

			</div>

			<?php
		}
	}
	else {
		?>
		<h2>Not Found</h2>
		<p>The content you have requested does not exist.</p>
		<?php
	}
	
	comments_template();
	?>

	</div><!-- id="content" -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>