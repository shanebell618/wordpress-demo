<?php get_header(); ?>

    <main>
        <a href="<?php echo get_site_url() ?>/custom-posts">
            <h2 class="page-heading">Custom Posts</h2>
        </a>

        <section>

            <?php 

            while(have_posts()) {
                the_post();

            ?>

            <div class="card">
                <div class="card-img">
                    <a href="<?php the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_id()) ?>">
                    </a>
                </div>
                <div class="card-text">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="card-meta">
                        Author: <?php the_author(); ?>
                        <br>
                        Date: <?php the_time('F j, Y'); ?>
                    </div>
                    <p> <?php echo wp_trim_words(get_the_excerpt(), 30) ?> </p>
                    <a href="<?php the_permalink(); ?>" class="read-more">
                        Read More
                    </a>
                </div>
            </div>
           
            <?php 
            }
            wp_reset_query(); 
            ?>

        </section>

<?php get_footer(); ?>