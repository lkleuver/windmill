	<div id="sidebar">
		<ul id="sidelist">
		
	<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
		<?php endif; ?>
		

<?php
// this is where 10 headlines from the current category get printed	  
if ( is_single() ) :
global $post;
$categories = get_the_category();
foreach ($categories as $category) :
?>
<li><h2>More from this category</h2>
<ul class="bullets">
<?php
$posts = get_posts('numberposts=10&category='. $category->term_id);
foreach($posts as $post) :
?>
<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>

<?php endforeach; ?>

<li><strong><a href="<?php echo get_category_link($category->term_id);?>" title="View all posts filed under <?php echo $category->name; ?>">Archive for '<?php echo $category->name; ?>' &raquo;</a></strong></li>
</ul>
</li>
<?php endforeach; endif ; ?>



<?php if ( is_home() ) { ?>
<li><h3><?php 
	// this is where the name of the News (or whatever) category gets printed	  
	wp_list_categories('include=8&title_li=&style=none'); ?></h3>
		<?php 
// this is where the last three headlines are pulled from the News (or whatever) category	  
		query_posts('showposts=3&cat=8'); 		
		?>
		<ul class="bullets">
 	<?php while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li>
 	<?php endwhile; ?>
 	</ul>
 	</li>
<?php } ?>

	
	<li><h3>Browse Archives</h3>
	<form id="archiveform" action="">
<select name="archive_chrono" onchange="window.location = 
(document.forms.archiveform.archive_chrono[document.forms.archiveform.archive_chrono.selectedIndex].value);">
	<?php get_archives('monthly','','option'); ?>
	</select>
	</form>
	</li>
	
	
<li><h3>Browse Categories</h3>
<ul class="subnav">
<?php wp_list_categories('title_li='); ?>
</ul>
</li>

<li><h3>Ads &amp; Sponsors</h3>
</li>

<li><h3>Contributors</h3>

<ul class="bullets">
<?php wp_list_authors
('exclude_admin=0&show_fullname=1&hide_empty=1&feed_image=' .
get_bloginfo('template_url') . '/images/rss.gif&feed=XML'); ?> 
 </ul>
</li>

</ul><!--END SIDELIST--> 
</div><!--END SIDEBAR-->