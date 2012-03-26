<?php get_header(); ?>
<div id="container">
<div id="entries" class='single'>

<div class="previous_post"><?php previous_post_link('&laquo; %link','%title') ?></div>
<div class="next_post"><?php next_post_link('&raquo; %link','%title') ?></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
 <div class='title-bar header'>
   <h1 class="post-title"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
   <div class="time-comment extras">
     <div class='the_time'><?php the_time('m.d.y'); ?></div>
     <div class='the_author'>by <span class="author_name"><?php the_author_link(); ?></span></div>
     <div class="add_comment"><?php comments_popup_link('Comment?', '1 Comment', '% Comments' ) ?></div>
  </div>
 </div>

<div class="post">
	<?php the_content(); ?>
<div class='tags'>
<?php if (function_exists('the_tags') ) : ?>
<?php the_tags(); ?>
<?php endif; ?>
</div>

</div><!--end posts-->

 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>

	<?php if (function_exists('related_posts')) { ?>
<h3>related</h3>
<ul>
<?php related_posts(); ?>
</ul>
<?php } ?>		

<?php if (function_exists('akpc_most_popular')) { ?>
<h3>popular</h3>
<ul>
<?php akpc_most_popular($limit = 5); ?>
</ul>
<?php } ?>

<?php comments_template(); ?><br/>
			
<div class="previous_post"><?php previous_post_link('&laquo; %link','%title') ?></div>
<div class="next_post"><?php next_post_link('&raquo; %link','%title') ?></div>
</div><!--end entries-->	
<?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>