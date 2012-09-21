<?php get_header(); ?>

  <div id="container">
    <div id="entries">
    
      <?php if (have_posts()) : ?> <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?> 

      

        <?php while (have_posts()) : the_post(); ?>

 
          <div class="results_content">
         <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

              <?php the_content(); ?>

<p><?php printf(__('This entry was written by %1$s, posted on <abbr class="published" title="%2$sT%3$s">%4$s at %5$s</abbr>, filed under %6$s%7$s. Leave a comment or view the discussion at the <a href="%8$s" title="Permalink to %9$s" rel="bookmark">permalink</a>.', 'sandbox'),
						'<span class="author vcard"><a class="url fn n" href="'.get_author_link(false, $authordata->ID, $authordata->user_nicename).'" title="' . sprintf(__('View all posts by %s', 'sandbox'), $authordata->display_name) . '">'.get_the_author().'</a></span>',
						get_the_time('Y-m-d'),
						get_the_time('H:i:sO'),
						the_date('', '', '', false),
						get_the_time(),
						get_the_category_list(', '),
						get_the_tag_list(' and tagged ', ', ', ''),
						get_permalink(),
						wp_specialchars(get_the_title(), 'double'),
						comments_rss() ) ?>


          </div>
        <?php endwhile; ?>
      <?php else : ?>

      <h3>Not Found</h3><?php endif; ?><?php next_posts_link('&laquo; Previous Entries') ?><br/>
      <?php previous_posts_link('&raquo; Next Entries') ?>
    </div><!--end entries-->
    <?php get_sidebar(); ?>

<?php get_footer(); ?>