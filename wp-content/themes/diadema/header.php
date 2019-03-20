<?php
/*
Theme Name: Diadema
Theme URI: https://mkvadrat.com/
Author: mkvadrat
Author URI: https://mkvadrat.com/
Description: Тема Diadema
Version: 1.0
*/
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->

<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo diadema_wp_title('','|', true, 'right'); ?></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/responsive.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/owl.carousel.min.js"></script>

    <?php wp_head(); ?>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3 logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img
                        src="<?php header_image(); ?>"
                        height="<?php echo get_custom_header()->height; ?>"
                        width="<?php echo get_custom_header()->width; ?>"
                        alt="diadema"
                    />
                </a>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="address">
                    <?php echo get_field('address_header_main_page', 10); ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="phones">
                    <?php echo get_field('phones_header_main_page', 10); ?>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <a href="#" title="ЗАКАЗАТЬ" class="btn-order" data-toggle="modal" data-target="#header-form">ЗАКАЗАТЬ</a>
            </div>
            <div class="popover-custom">
                <div class="popover-inner">
                    <?php echo get_field('text_header_main_page', 10); ?>
                </div>
            </div>
        </div>
    </div>
</header>