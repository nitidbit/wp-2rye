<?php get_header(); ?>

  <div id="container">
    <div id="entries" class="archive">
      <h2>
     <?php if (have_posts()) : $post = $posts[0]; ?>
<?php  // Hack. Set $post so that the_date() works. ?> <?php /* If this is a category archive */ if (is_category()) { ?> <?php echo single_cat_title(); ?> <?php /* If this is a daily archive */ } elseif (is_day()) { ?> <?php the_time('F jS, Y'); ?> <?php /* If this is a monthly archive */ } elseif (is_month()) { ?> <?php the_time('F Y'); ?> <?php /* If this is a yearly archive */ } elseif (is_year()) { ?> <?php the_time('Y'); ?> <?php /* If this is a search */ } elseif (is_search()) { ?> Results <?php /* If this is an author archive */ } elseif (is_author()) { ?> Author <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?> Archives <?php } ?>
     <? endif; ?>
     <? single_tag_title("Articles with tag: ") ?>
     </h2>
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
      </ul><?php else : ?>

      <h3>Not Found</h3><?php endif; ?><?php next_posts_link('&laquo; Previous Entries') ?><br/>
      <?php previous_posts_link('&raquo; Next Entries') ?>
    </div><!--end entries-->
    <?php get_sidebar(); ?>
</div><!-- end container -->
<?php get_footer(); ?>