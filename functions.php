 <?php

function themeFunction()
{
    // for load a file
    load_theme_textdomain('themetheme', get_template_directory() . '/lang.php');

    // for make title
    add_theme_support('title-tag');

    // for make menu
    register_nav_menu('mainmenu', 'Primary Menu');

    // for make a custom logo
    add_theme_support('custom-logo', array(
        // 'height' => 150,
        // 'width'  => 150,

    ));

    // for make header image
    add_theme_support('custom-header');

    // add_theme_support('custom-header', array(
    //     'default-image'          => '',
       
    // ));

    // for make background image
    add_theme_support('custom-background');

    // for  make fetures iamge
    add_theme_support('post-thumbnails');

    // for make post format
    add_theme_support('post-formats', array('audio', 'video', 'image', 'chat', 'gallery'));
};


add_action('after_setup_theme', 'themeFunction');

function defult_menu()
{ ?>

    <ul>
        <li><a href="<?php echo home_url(); ?>">backmenu</a></li>
        <li><a href="<?php echo home_url() . '/lang.php'; ?>">Another menu</a></li>
    </ul>


<?php };








?>