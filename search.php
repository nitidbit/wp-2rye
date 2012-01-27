<?php get_header(); ?>
<div id="container">
<div id="entries" class='search_results'>
<?php previous_post_link('&laquo; %link','%title') ?><br/>
<?php next_post_link('&raquo; %link','%title') ?>	

	<h3>Look What I Found</h3>
	<?php if (have_posts()) : ?>
	 <ul>
        <?php while (have_posts()) : the_post(); ?>

        <li>
 
          <div class="results_content">
           <h1 style="display:inline;"><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h1>
   <div class='ctrls'>
   <span class='the_time'><?php the_time('m.d.y'); ?></span>
| 
   <span class='permalink'><a href="<?php the_permalink(); ?>">Permalink</a></span>
   | 
   <span class='add_comment'><?php comments_popup_link('Comment?', '1 Comment', '% Comments' ) ?></span>
   </div>
            <div class='post excerpt'>
              <?php the_excerpt(); ?>
            </div>
          </div>
        </li><?php endwhile; ?>
      </ul>
	<?php else : ?>
		<h3>Look What I Didn't Find</h3>
<h1 style="display:inline; font-size:3.3em;">Nothing Found</h1><br/><br/>
Sorry. I looked everywhere, but I didn't find anything. Try again?
	<?php endif; ?>
<?php previous_post_link('&laquo; %link','%title') ?><br/>
<?php next_post_link('&raquo; %link','%title') ?><br/>	
</div><!--end entries-->
<?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>