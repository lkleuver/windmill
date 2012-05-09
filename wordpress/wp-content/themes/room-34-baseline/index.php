<?php get_header(); ?>

	<div id="content" role="main" class="span-17 colborder">

	<?php
	if (have_posts()) {
	
		// Archive headers
		$post = $posts[0];
		if (is_category()) {
			echo '<h1>'; single_cat_title(); echo '</h1>';
		}
		elseif(is_tag()) {
			echo '<h1>Tag: '; single_tag_title(); echo '</h1>';
		}
		elseif (is_day()) {
			echo '<h1>'; the_time(get_option('date_format')); echo '</h1>';
		}
		elseif (is_month()) {
			echo '<h1>'; the_time('F Y'); echo '</h1>';
		}
		elseif (is_year()) {
			echo '<h1>'; the_time('Y'); echo '</h1>';
		}
		elseif (is_author()) {
			echo '<h1>Author Archive</h1>';
		}
		elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {
			echo '<h1>Blog Archives</h1>';
		}

		while (have_posts()) {
			the_post();
			?>

			<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

				<p class="postmetadata">
					<?php the_time(get_option('date_format')); ?> by <?php the_author(); ?>
				</p>

				<div class="entry">
					<?php the_content('Read more &raquo;'); ?>
				</div>

				<p class="postmetadata">
					<?php the_tags('Tags: ', ', ', '<br />'); ?>
					Categories: <?php the_category(', ') ?> &#8226;
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
		?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
		</div>

		<?php
	}
	else {
		?>
		<h2>Not Found</h2>
		<p>The content you have requested does not exist.</p>
		<?php
	}
	?>

	</div><!-- id="content" -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>