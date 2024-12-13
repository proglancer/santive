<?php
/**
 * The template for displaying all pages
 * Template Name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Santive
 */

get_header();
?>

<!-- Hero Section -->



<!---------Hero------------>
<?php get_template_part('/template-parts/content','hero'); ?>
<!---------about------------>
<?php get_template_part('/template-parts/content','about'); ?>
<!---------event------------>
<?php get_template_part('/template-parts/content','paralax'); ?>
<!---------ticket------------>
<?php get_template_part('/template-parts/content','ticket'); ?>
<!---------faq------------>
<?php get_template_part('/template-parts/content','faq'); ?>

<!---------testimonial------------>
<?php get_template_part('/template-parts/content','testimonial'); ?>
<!---------contact------------>
<?php get_template_part('/template-parts/content','contact'); ?>























<?php

get_footer();
