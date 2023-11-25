<!DOCTYPE html>
<html <?php language_attributes(); //for all languages 
        ?>>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=<?php echo  get_theme_file_uri("/style.css")?>>
    <!-- for show title -->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>