<!DOCTYPE html>
<html <?php language_attributes(); //for all languages 
        ?>>

<head>
    <meta charset="UTF-8">
    <!-- for show title -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <?php
    //for run menu
    if (has_nav_menu('mainmenu')) {
        wp_nav_menu(array(
            'theme-location' => 'mainmenu',
            'menu_class' => 'amarClass',
            'menu_id' => 'amarID',
            'fallback_cb'     => 'defult_menu',
        ));
    };
    ?>
    <h1>THIS IS THEME PROJECT HEADLINE</h1>

    <!-- <img src="<?php //bloginfo('template_directory');
                    ?>/Rectangle (7).png" alt=""> -->

    <!-- <img src="<?php //echo get_template_directory_uri();
                    ?>/Rectangle (7).png" alt=""> -->


    <img src="<?php //echo get_theme_file_uri('/Rectangle (7).png');
                ?>" alt="">

    <!--for run header image -->
    <!-- <img src="<?php //echo get_header_image();
                    ?>" alt=""> -->


    <!--for run header image -->
    <?php the_custom_header_markup(); ?>

    <!--for show logo image -->
    <?php

    if (get_custom_logo()) {
        the_custom_logo();
    } else { ?>
        <img src="<?php echo get_theme_file_uri('/Rectangle (7).png');
                    ?>" alt="">
    <?php };




    while (have_posts()) : ?>
        <?php the_post();
        echo 'this is done with the_post' . "<br>"; ?>

        <a href="<?php the_permalink() ?>">
            <h2><?php the_title() ?></h2>
        </a>

        <h3><?php the_content(); ?></h3>




    <?php endwhile;

    if (has_post_format('audio')) {
        echo 'This is a chat.';
    }

    ?>


















    <?php wp_footer(); ?>
</body>

</html>