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

?>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top ">
<div class="container-fluid">
	<a class="navbar-brand navBrand colorWhite" href="#">
	<img src="assets/images/SDG-logo.png" height="90" alt="CoolBrand">
	THE GLOBAL GOALS
	</a>
	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse headerNavigationUl" id="navbarSupportedContent">
	<ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
		<li class="nav-item">
		<a class="nav-link colorWhite active" aria-current="page" href="#">HOME</a>
		</li>
		<li class="nav-item">
		<a class="nav-link colorWhite" href="#">THE 17 GOALS</a>
		</li>
		<li class="nav-item">
		<a class="nav-link colorWhite" href="#">TAKE ACTION</a>
		</li>
		<li class="nav-item">
		<a class="nav-link colorWhite" href="#">NEWS</a>
		</li>
		<li class="nav-item">
		<a class="nav-link colorWhite" href="#">RESOURCES</a>
		</li>
		<li class="nav-item">
		<a class="nav-link colorWhite" href="#">PODCAST</a>
		</li>            
		
	</div>
</div>
</nav>

<!-- HEADER/BANNER 9 (Using CYCLE 2 PLUGIN) -->

<header style="height: 800px; position:relative;">
	<div class="container-fluid p-0">
			<div class="cycle-slideshow" 
				data-cycle-fx="scrollHorz" 
				data-cycle-timeout="1000000"
				data-cycle-slides="div"
				data-cycle-pager=".indicators-div"
				data-cycle-pager-template="<div class='heroIndicator'></div>"
				data-cycle-caption-template = "<h5 class='carousel_title carousel-text-home carousel-title-home   mb-2 '>{{title}}</h5><p class='carousel_text carousel-text-home'>{{description}}</p>"
				data-cycle-caption=".carousel_text_div"
				
				style="padding: 0px; width: 100%; height: 100vh"
				>

					<!-- div 1 -->
					<div   class="header-div-home-img1 header-div" style="height: 800px">
						<!-- <iframe src="https://www.youtube.com/embed/uWtIZJ3EhGY?&autoplay=1&mute=1&playsinline=1" ></iframe> -->
						<section class='sliderContentSection' >
							<h2 class="sliderHeader">If not now, when? It’s time to tackle the World’s To-Do List</h2>
							
						</section>   
						
						<section class="actionSection">
							<a href="https://www.youtube.com/watch?v=uWtIZJ3EhGY">
								<button type="text" class="btn actionBtn">WATCH NOW</button>

							</a>
						</section>
					</div>

					<!-- div 2 -->
					<div class="header-div-home-img2  header-div" style="height: 800px">  
						<section class='sliderContentSection' >
							<h2 class="sliderHeader">INNOVATION &amp; COLLABORATION FOR THE GLOBAL GOALS</h2>
							<p><span >as we look towards 2023 it is important to reflect on the wins we&nbsp;</span><i><span >have&nbsp;</span></i><span >seen for the Global Goals.</span></p>
						</section>   
						
						<section class="actionSection">
							<a href="https://www.globalgoals.org/news/a-year-in-review-innovation-collaboration-for-the-global-goals-in-2022/">
								<button type="text" class="btn actionBtn">READ MORE</button>

							</a>

						</section>     
					</div>

					<!-- div 3 -->
					<div class="header-div-home-img3 header-div" style="height: 800px" >
						<section class='sliderContentSection' >
							<h2 class="slider3Text"><span class="">It’s almost two months since&nbsp;</span><span class="NormalTextRun SCXW258023972 BCX0">Mahsa A</span><span class="NormalTextRun SCXW258023972 BCX0">mini’s</span><span class="NormalTextRun SCXW258023972 BCX0">&nbsp;death, which sparked protests&nbsp;</span><span class="NormalTextRun SCXW258023972 BCX0">across Iran, and&nbsp;</span><span class="NormalTextRun SCXW258023972 BCX0">around&nbsp;</span><span class="NormalTextRun SCXW258023972 BCX0">the world for&nbsp;</span><span class="NormalTextRun SCXW258023972 BCX0">equality and freedom.</span></h2>
						</section>   
						
						<section class="actionSection" style="height: 800px">
							<a href="https://www.globalgoals.org/news/a-year-in-review-innovation-collaboration-for-the-global-goals-in-2022/">
								<button type="text" class="btn actionBtn">READ MORE</button>

							</a>

						</section>  

					</div>
					<!-- div 4 -->
					<div class="header-div-home-img4 header-div"style="height: 800px"  >
						<section class='sliderContentSection' >
							<h2 class="mt-3">CITIES AROUND THE WORLD</h2>
							<p class="mt-3">call for greater support to achieve the Global Goals</p>                            </section>   
						
						<section class="actionSection">
							<a href="https://www.globalgoals.org/news/cities-around-the-world-call-for-greater-support-to-achieve-the-global-goals/">
								<button type="text" class="btn actionBtn">FIND OUT MORE</button>

							</a>

						</section>  

					</div>
					<!-- div 5 -->
					<div class="header-div-home-img5 header-div" style="height: 800px" >
						<section class='sliderContentSection' >
							<h2>What change do you want to see in the world?</h2>
							<p>Put a To-Do sticky note on something you care about and remind leaders that the Global Goals are the World’s To-Do List.</p>
							<p>Use this image tool to create your message.</p>
						</section>   
						
						<section class="actionSection">
							<a href="https://www.globalgoals.org/goals-tool/">
								<button type="text" class="btn actionBtn">CREATE YOUR MESSAGE</button>

							</a>

						</section>  

					</div>
					<!-- div 6 -->
					<div class="header-div-home-img6 header-div" style="height: 800px" >
						<section class='sliderContentSection' >
							<h2>The Global Goals are a set of 17 commitments made by 193 world leaders, to end extreme poverty, inequality, and climate change by 2030.</h2>                                
						</section>   
						
						<section class="actionSection">
							<a href="https://www.globalgoals.org/goals/">
								<button type="text" class="btn actionBtn">SEE THE 17 GOALS</button>

							</a>

						</section>  

					</div>
					

					

			</div>

			<!-- carousel text -->
			
			<div class="carousel_text_div text-white"></div>               
				
			<!-- indicators div -->
			<div class="indicators-div"></div>


	</div>
</header>


?>

<!-- <header class="mb-5" >

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


  
 
 

</header> -->


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
