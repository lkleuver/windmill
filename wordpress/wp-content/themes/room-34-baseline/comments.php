<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && basename($_SERVER['SCRIPT_FILENAME']) == 'comments.php') {
	exit;
}

if (post_password_required()) {
	?>
	<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
	return;
}
?>

<div id="comments">
	<?php
	if (have_comments()) {
		?>
		<h2>Comments</h2>

		<ol class="commentlist">
			<?php wp_list_comments(); ?>
		</ol>

 		<?php
 	}

	if (comments_open()) {
		?>
		<div id="respond">

			<h2>Submit a Comment</h2>
	
			<div class="cancel-comment-reply">
				<small><?php cancel_comment_reply_link(); ?></small>
			</div>
	
			<?php
			if (get_option('comment_registration') && !is_user_logged_in()) {
				?>
				<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
				<?php
			}
			?>
	
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
	
			<?php
			if (is_user_logged_in()) {
				?>
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
				<?php
			}
			else {
				?>
				<div class="input">
					<label for="author">Name <?php if ($req) echo "(required)"; ?></label>
					<input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
				</div>
	
				<div class="input">
					<label for="email">Email (will not be published) <?php if ($req) echo "(required)"; ?></label>
					<input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
				</div>
	
				<div class="input">
					<label for="url">Website URL</label>
					<input type="text" name="url" id="url" value="<?php echo esc_attr($comment_author_url); ?>" tabindex="3" />
				</div>
				<?php
			}
			?>
	
			<div class="input">
				<label for="comment">Your Comment</label>
				<textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4"></textarea>
			</div>
	
			<div class="input">
				<input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
				<?php comment_id_fields(); ?>
			</div>
			<?php
			do_action('comment_form', $post->ID);
			?>
	
			</form>

		</div><!-- id="respond" -->
		<?php
	}
	?>
</div><!-- id="comments" -->