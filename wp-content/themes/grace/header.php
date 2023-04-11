<?php

/**
 * theme header template
 * 
 * @package grace
 */
?>

<!DOCTYPE html>
<html dir="ltr" lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title -->
    <title>Recipes | Canvas</title>
    <?php wp_head(); ?>

    <style>
        .dt-shadow {
            text-shadow: 0px 10px 30px rgba(0, 0, 0, 1);
        }

        #rev_slider_131_1 .uranus.tparrows {
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0);
        }

        #rev_slider_131_1 .uranus.tparrows:before {
            width: 50px;
            height: 50px;
            line-height: 50px;
            font-size: 40px;
            transition: all 0.3s;
            -webkit-transition: all 0.3s;
        }

        #rev_slider_131_1 .uranus.tparrows:hover:before {
            opacity: 0.75;
        }

        .slotholder canvas {
            height: 100% !important;
        }
    </style>


</head>

<body class="stretched <?php body_class(); ?>">

    <?php
    if (function_exists('wp_body_open')) {
        wp_body_open();
    }
    ?>

    <!-- Document Wrapper -->
    <div id="wrapper" class="clearfix">

        <!-- Header -->
        <header id="header" class="transparent-header" data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <?php get_template_part('template-parts/header/topHeader') ?>

                        <?php get_template_part('template-parts/header/nav'); ?>

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>
        <!-- #header end -->