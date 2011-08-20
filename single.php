<?php get_header(); ?>
<div id="container">
<div id="entries">

<?php previous_post_link('&laquo; %link','%title') ?><br/>
<?php next_post_link('&raquo; %link','%title') ?>

<h3><?php the_category(', ') ?></h3>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

 <h1 class="post-title" style="display:inline;"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
<div class="time-comment"><small><?php the_time('m.d.y'); ?> <b>|</b> <?php comments_number('Comment?', '1 Comment', '% Comments' ) ?> </small></div>

<div class="post">
	<?php the_content(); ?>

<?php if (function_exists('the_tags') ) : ?>
<?php the_tags(); ?>
<?php endif; ?>

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
			
<?php previous_post_link('&laquo; %link','%title') ?><br/>
<?php next_post_link('&raquo; %link','%title') ?><br/>
</div><!--end entries-->	
<?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>