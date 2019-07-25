<?php get_header(); ?>

<div id="banner">
        <h1>Wordpress Theme Demo</h1>
        <h2>2019</h2>
    </div>

    <main>
        <a href="<?php echo get_site_url('/posts') ?>">
            <h2 class="section-heading">Posts</h2>
        </a>

        <section>

            <?php 

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
            );

            $blogPosts = new WP_Query($args);

            while($blogPosts->have_posts()) {
                $blogPosts->the_post();

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

        <a href="<?php echo get_site_url('/custom-posts') ?>">
            <h2 class="section-heading">Custom Post Type</h2>
        </a>

        <section>

            <?php 

            $args = array(
                'post_type' => 'custom-posts',
                'posts_per_page' => 3,
            );

            $customPosts = new WP_Query($args);

            while($customPosts->have_posts()) {
                $customPosts->the_post();

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