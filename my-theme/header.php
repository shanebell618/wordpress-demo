<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<body>
    <div id="mobile-nav">
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
            <li>
                <input type="text" placeholder="Search...">
            </li>
        </ul>
    </div>
    <nav>
        <div id="logo">
            <a href="<?php echo get_site_url() ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="logo">
            </a>
        </div>
        <div id="hamburger-icon">
            <i class="fas fa-bars"></i>
        </div>
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
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>
    <div id="search-dropdown">
        <input type="text" placeholder="Search...">
    </div>