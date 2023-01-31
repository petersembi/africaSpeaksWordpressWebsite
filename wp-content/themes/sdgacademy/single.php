<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package AfricaSpeaks
 */

get_header();
?>

<!-- <div class="container">
        <div class="row">
            <main class="col-md-10 col-lg-8 col-12 mx-auto mainArticle "> -->

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'post' );
			get_template_part( 'template-parts/content', 'theArticle' );
			

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) :
			// 	comments_template();
			// endif;

		endwhile; // End of the loop.
		?>

	
<?php
// get_sidebar();
get_footer();
