<?php
/* Template Name: Home Page */

//  Advanced Custom Fields
get_header();
get_template_part('template-parts/content', 'homeheader');
the_content();
get_template_part('template-parts/content', 'testimonial');
get_footer();
?>