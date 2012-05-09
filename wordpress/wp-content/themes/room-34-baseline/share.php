<?php
$sharepath = get_option('siteurl') . '/wp-content/themes/' . get_option('stylesheet') . '/images/share_icons/';
?>
<ul class="inline share">
	<li><a href="http://del.icio.us/post?url=<?php echo rawurlencode(trackback_url(false)); ?>&amp;title=<?php echo rawurlencode(get_the_title()); ?>" title="Share this on Del.icio.us..."><img src="<?php echo $sharepath; ?>delicious.png" alt="Del.icio.us" /></a></li>

	<li><a href="http://digg.com/submit?phase=2&amp;url=<?php echo rawurlencode(trackback_url(false)); ?>&amp;title=<?php echo rawurlencode(get_the_title()); ?>" title="Share this on Digg..."><img src="<?php echo $sharepath; ?>digg.png" alt="Digg" /></a></li>

	<li><a href="http://www.facebook.com/share.php?u=<?php echo rawurlencode(trackback_url(false)); ?>" title="Share this on Facebook..."><img src="<?php echo $sharepath; ?>facebook.png" alt="Facebook" /></a></li>

	<li><a href="http://www.google.com/bookmarks/mark?op=edit&amp;bkmk=<?php echo rawurlencode(trackback_url(false)); ?>&amp;title=<?php echo rawurlencode(get_the_title()); ?>" title="Share this on Google Bookmarks..."><img src="<?php echo $sharepath; ?>googlebookmark.png" alt="Google Bookmark" /></a></li>

	<li><a href="http://www.stumbleupon.com/submit?url=<?php echo rawurlencode(trackback_url(false)); ?>&amp;title=<?php echo rawurlencode(get_the_title()); ?>" title="Share this on StumbleUpon..."><img src="<?php echo $sharepath; ?>stumbleupon.png" alt="StumbleUpon" /></a></li>

	<li><a href="http://www.technorati.com/faves?add=<?php echo rawurlencode(trackback_url(false)); ?>" title="Share this on Technorati..."><img src="<?php echo $sharepath; ?>technorati.png" alt="Technorati" /></a></li>

	<li><a href="http://twitter.com/home?status=Currently%20reading%20<?php echo rawurlencode(trackback_url(false)); ?>" title="Share this on Twitter..."><img src="<?php echo $sharepath; ?>twitter.png" alt="Twitter" /></a> </li>
</ul>