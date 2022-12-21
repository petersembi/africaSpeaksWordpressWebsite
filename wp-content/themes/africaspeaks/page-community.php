<?php
/* Template Name: Community Page */

//  Advanced Custom Fields
get_header();
get_template_part('template-parts/content', 'communityheader');
the_content();
get_template_part('template-parts/content', 'testimonial');
?>





<?php 
get_footer();
?>