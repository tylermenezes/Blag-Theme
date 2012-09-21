<?php get_header(); ?>

        <div id="container">
            <div id="entries">
            <?php wp_indent(function(){include_once('single_navigation.php');}, 4); ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <?php custom_post_css(); ?>

                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

                <!-- post goes here -->
                <div class="post">
                    <?php wp_indent('the_content', 5) ?>

                    <?php edit_post_link('Edit this post.','',''); ?>
                    <hr class="clear" />
                </div>
                <?php endwhile; ?>
                <?php else : ?>
                <h2>No posts were found.</h2>
                <?php endif; ?>
                <?php wp_indent(function(){include_once('single_navigation.php');}, 4); ?>
                <?php wp_indent('comments_template', 4); ?>
            </div>
        </div>
<?php get_footer(); ?>