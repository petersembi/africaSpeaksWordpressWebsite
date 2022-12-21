<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AfricaSpeaks
 */

get_header();
// get_template_part( 'template-parts/content', 'blogheader');

?>

<header class="mb-5" >

<div class="container-fluid header-div h-75" style="background-image: url('<?php bloginfo( 'stylesheet_directory' ) ?>/assets/images/articles-scaled.jpg');">
  <div class="container">
	<div class="row">
	  <div class="col-md-4">
		<div class="carousel-content">

		  <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/assets/images/africaspeaks_logo_transparent.png" alt="" class="img-fluid" height="147" width="200">

		  <nav class="navbar navbar-expand-lg ">
			  <div class="container-fluid">
				
				<button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>
            
                      
                      <div class=" navbar-collapse  rounded collapse navbar-light" id="main-menu">
					  <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                      'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-decoration-none header_ul  header_ul_about_us %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                  ));
                  ?>
						
						
						
						<?php
                        // wp_nav_menu(array(
                        //     'theme_location' => 'main-menu',
                        //     'container' => false,
                        //     'menu_class' => '',
                        //     'fallback_cb' => '__return_false',
                        //     // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                        //     'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-decoration-none header_ul header_ul_about_us %2$s">%3$s</ul>',
                        //     'depth' => 2,
                        //     'walker' => new bootstrap_5_wp_nav_menu_walker()
                        // ));
                        ?>
                </div>
			  </div>
			</nav>

		   


	  </div>
	  </div>

	  <div class="col-md-8 position-relative" style="height:75vh;" >
		<div class=" text-white about_us_welcome_text">
		  <h5 class="carousel_title about_us_title">Learn about our hopes, experiences and thoughts in the African publishing industry.</h5>
		  
		  </div>
	  </div>

	</div>
   
  </div>
  
</div>


  
 
 

</header>


<div class="container">
            <div class="row">
                
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'excerpt' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
	</div>
	</div>


<?php
// get_sidebar();
get_footer();
