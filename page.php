<?php get_header(); ?>

<div id="primary" class="primary">
    <?php 
        while ( have_posts() ) : the_post();
            the_title();
            the_content(); 
        endwhile; 
    ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
