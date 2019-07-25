<?php get_header(); ?>

    <main>

    <?php 
    while(have_posts()) {
        the_post();

    ?>

        <a href="<?php echo get_site_url() ?>/posts">
            <h2 class="page-heading"><?php the_title(); ?></h2>
        </a>

        <section>
            <div class="card">
                <div class="card-img">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_id()) ?>">
                    </a>
                </div>
                <div class="page-card-text">
                    <?php the_content(); ?>
                    </a>
                    <div class="card-meta">
                        Author: <?php the_author(); ?>
                        <br>
                        Date: <?php the_time('F j, Y'); ?>
                        <br>
                        <a href="#"> <?php echo get_the_category_list(', '); ?> </a>
                    </div>
                </div>
            </div>
           
            <?php 
            }
            wp_reset_query(); 
            ?>

        </section>

<?php get_footer(); ?>