<?php get_header(); ?>
<div id="container">
<div id="entries">

<?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
<div class="post_container clearfix">
   <div class="header">
     <h1><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
<div class="extras">
     <div class='the_time'><?php the_time('m.d.y'); ?></div>
     <div class='the_author'>by <span class="author_name"><?php the_author_link(); ?></span></div>
</div>
   </div>
   <div class='ctrls'>
   <span class='permalink'><a href="<?php the_permalink(); ?>">Permalink</a></span>
   | 
   <span class='add_comment'><?php comments_popup_link('Comment?', '1 Comment', '% Comments' ) ?></span>
   </div>
   <div class="post excerpt">
   <?php the_excerpt(); ?>
   </div><!--end posts-->
   <div class='tags'><?php the_tags() ?></div>

</div>
 <?php endwhile; ?>
 <?php else : ?>
 <!-- no posts -->

 <h2>Sorry, no posts were found</h2>
 <?php endif; ?>

<div class="next_post">    <?php next_posts_link('&laquo; Previous Entries') ?></div>
<div class="previous_post"><?php previous_posts_link('&raquo; Next Entries') ?></div>


</div><!--end entries-->
<?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>