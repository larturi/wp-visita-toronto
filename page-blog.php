<!-- 
    Template Name: Guia Toronto
 -->

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

    <?php if (has_post_thumbnail()) { ?>
        <div class="destacada">
            <?php the_post_thumbnail('destacada'); ?>
            <h2><?php the_title(); ?></h2>
        </div>
    <?php } else { ?>
        <h2 class="noimagen"><?php the_title(); ?></h2>
    <?php } ?>
     
    <div id="primary" class="primary">
        <?php  
            $args = array(
                'post_type' => 'post',
                'category__in' => array(6,5,4),
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            $guiaToronto = new WP_Query( $args );            
        ?>

        <?php while($guiaToronto->have_posts()): $guiaToronto->the_post(); ?>
            <div class="post-guia">
                <div class="imagen">
                    <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('guia-toronto'); ?>
                    </a>
                    <div class="categoria">
                        <?php the_category(); ?>
                    </div>
                </div>
                <div class="contenido">
                    <h3><?php the_title(); ?></h3>
                    <?php the_excerpt(); ?>
                    <span>
                       <a href="<?php the_permalink(); ?>">Leer mas</a>
                    </span>
                </div>
                <div class="info-post">
                    <p class="autor">
                        Por <span><?php the_author(); ?></span>
                    </p>
                    <p class="fecha">
                        <?php the_time('j F, Y'); ?>
                    </p>
                    <div class="clear"></div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
<?php endwhile; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
