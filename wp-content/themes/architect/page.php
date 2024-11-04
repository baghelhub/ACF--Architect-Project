<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Architect
 */

 
get_header();

$pageid = get_the_ID();
        if ( have_rows('sections', $pageid) ) :
            while ( have_rows('sections', $pageid) ) : the_row();
                get_template_part('partials/' . get_row_layout()); 
            endwhile;
        endif;

get_footer();

