<?php get_header(); ?>

	<div id="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><?php the_title(); ?></h2>
			
			<small>By  <?php the_author_posts_link('namefl'); ?> &bull; <?php the_time('M jS, Y') ?> &bull; Category: <?php the_category(', ') ?></small>
		
		
			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</div>
				
				
			
			<?php if ( function_exists('the_tags') ) {
			the_tags('<span id="tags"><strong>Tagged as:</strong> ', ', ', '</span>'); } ?>
			


<div id="writer" class="clearfloat">
<img src="<?php bloginfo('template_url'); ?>/images/<?php the_author_login(); ?>.jpg" alt="" />
<p class="right"><strong><?php the_author_posts_link('namefl'); ?></strong> is <?php the_author_description(); ?><br />
<span><a href="mailto:<?php the_author_email(); ?>" title="Email this author">Email this author</a> | All posts by <?php the_author_posts_link('namefl'); ?></span></p>
</div><!--END WRITER-->


				<!--<p class="postmetadata alt">
					<small>
						This entry was posted
						<?php /* This is commented, because it requires a little adjusting sometimes.
							You'll need to download this plugin, and follow the instructions:
							http://binarybonsai.com/archives/2004/08/17/time-since-plugin/ */
							/* $entry_datetime = abs(strtotime($post->post_date) - (60*120)); echo time_since($entry_datetime); echo ' ago'; */ ?>
						on <?php the_time('l, F jS, Y') ?> at <?php the_time() ?>
						and is filed un<small>
						<?php the_category(', ') ?>
						</small>der .
						You can follow any responses to this entry through the 
						<?php comments_rss_link('RSS 2.0'); ?> feed.

						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.

						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.

						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							You can skip to the end and leave a response. Pinging is currently not allowed.

						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both comments and pings are currently closed.

						<?php } edit_post_link('Edit this entry.','',''); ?>
					</small>				</p>-->

		  </div>
		

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
