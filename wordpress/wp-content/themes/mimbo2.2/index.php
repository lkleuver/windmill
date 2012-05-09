<?php get_header(); ?>
<div id="content">
  
  <div class="feature clearfloat" id="lead">
 
   <?php 
// this is where the Lead Story module begins   
   query_posts('showposts=1&cat=3'); ?>
    <?php while (have_posts()) : the_post(); ?>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/<?php 
// this is where the Lead Story image gets printed	
	$values = get_post_custom_values("Image"); echo $values[0]; ?>" alt="" id="leadpic" /></a>
    <h3>
	<?php 
	// this is where the name of the Lead Story category gets printed	  
	wp_list_categories('include=3&title_li=&style=none'); ?></h3>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="title">
    <?php 
// this is where the title of the Lead Story gets printed	  
	the_title(); ?>
    </a>
    <?php 
// this is where the excerpt of the Lead Story gets printed	  
	the_excerpt(); ?>
    {<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">More&raquo;</a>}
    <?php endwhile; ?>
  </div><!--END FEATURE-->


  <div id="leftcol">
    <?php 
// this is where the Features module begins	  
	query_posts('showposts=3&cat=4'); ?>
    <h3><?php 
	// this is where the name of the Features category gets printed	  
	wp_list_categories('include=4&title_li=&style=none'); ?></h3>
    <?php while (have_posts()) : the_post(); ?>
    <div class="feature"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/<?php 
// this is where the custom field prints images for each Feature	  
	$values = get_post_custom_values("Image"); echo $values[0]; ?>" alt="" /></a><a href="<?php the_permalink() ?>" rel="bookmark" class="title">
      <?php 
// this is where title of the Feature gets printed	  
	  the_title(); ?>&raquo;</a></div>
    <?php endwhile; ?>
  </div><!--END LEFTCOL-->
  
  
  <div id="rightcol">
    <?php
// this is where you enter the IDs of which categories you want to display
$display_categories = array(5,6,7);
foreach ($display_categories as $category) { ?>
    <div class="clearfloat">
      <?php query_posts("showposts=1&cat=$category");
	    $wp_query->is_category = false;
		$wp_query->is_archive = false;
		$wp_query->is_home = true;
		 ?>
      <h3><a href="<?php echo get_category_link($category);?>"><?php 
	// this is where the name of each category gets printed	  
	  single_cat_title(); ?></a></h3>
      <?php while (have_posts()) : the_post(); ?>
      <?php
// this grabs the image filename
	$values = get_post_custom_values("Image");
// this checks to see if an image file exists
	if (isset($values[0])) {						
?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/<?php $values = get_post_custom_values("Image"); echo $values[0]; ?>" alt="" /></a>
      <?php } ?>
      <a href="<?php the_permalink() ?>" rel="bookmark" class="title"><?php 
// this is where title of the article gets printed	  
	  the_title(); ?>&raquo;</a>
      <?php the_excerpt(); ?>
      <?php endwhile; ?>
    </div>
    <?php } ?>
  </div><!--END RIGHTCOL-->
</div><!--END CONTENT-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
