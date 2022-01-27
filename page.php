<?php get_header(); ?>

    <?php while ( have_posts() ) : the_post(); ?>

        <div class="destacada">
            <?php the_post_thumbnail('destacada'); ?>
            <h2><?php the_title(); ?></h2>
        </div>
         
        <div id="primary" class="primary">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>

    <?php get_sidebar(); ?>

<?php get_footer(); ?>
