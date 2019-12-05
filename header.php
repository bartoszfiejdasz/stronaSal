<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset')?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <meta name="description" content="<?php bloginfo('description');?>">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">
</head>

<body>