<footer>
            <div id="footer-left">
                <h3>Menu</h3>
                <ul>
                    <li>
                        <a href="<?php echo get_site_url() ?>" <?php if(is_front_page()) echo 'class="active"' ?>>Home</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url() ?>/posts" <?php if(get_post_type() === 'post') echo 'class="active"' ?>>Posts</a>
                    </li>
                    <li>
                        <a href="<?php echo get_site_url() ?>/custom-posts" <?php if(get_post_type() === 'custom-post') echo 'class="active"' ?>>Custom Posts</a>
                    </li>
                </ul>
            </div>
            <div id="footer-right">
                <h3>Source Code</h3>
                <a href="https://github.com/shanebell618">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <p>Demo WP Website - Shane Bell</p>
        </footer>
        
    </main>
    <?php wp_footer(); ?>
</body>

</html>