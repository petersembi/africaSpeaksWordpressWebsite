<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AfricaSpeaks
 */

?>

  <!-- Footer Section -->
  <footer class="myfooter">
        <div class="container mt-4">
            <div class="row mt-5">
                <div class="col-md-3 mt-4">
                <img src="<?php bloginfo( 'stylesheet_directory' )?>/assets/images/africaspeaks_logo_transparent.png" alt="" class="img-fluid mt-4" width = "200" height = "147">


                </div>
                <div class="col-md-9 mt-2">
                    <!-- <ul class="d-flex   list-inline ul-footer footer_ul_nav">
                        <a href=""><li class=" list-inline-item ">HOME</li></a>
                        <a href=""><li class="list-inline-item ms-3">ABOUT US</li></a>
                        <a href=""><li class="list-inline-item ms-3">COMMUNITY</i></li></a>
                        <a href=""><li class="list-inline-item ms-3">MEMBERSHIP</li></a>
                        <a href=""><li class="list-inline-item ms-3">CONTACT US</li></a>
                   
                    </ul> -->
                    <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                      'items_wrap' => '<ul id="%1$s" class="d-flex   list-inline ul-footer footer_ul_nav %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                  ));
                  ?>
                    

                      <ul class="d-flex   list-inline ul-footer">
                        <a href=""><li class=" list-inline-item "><i class=" fa-2x fa-brands fa-facebook-f footerIcons"></i></li></a>
                        <a href=""><li class="list-inline-item ms-3"><i class="fa-2x fa-brands fa-twitter footerIcons"></i></li></a>
                        <a href=""><li class="list-inline-item ms-3"><i class=" fa-2x fa-brands fa-linkedin-in footerIcons"></i></li></a>
                        <a href=""><li class="list-inline-item ms-3"><i class="fa-2x fa-brands fa-whatsapp footerIcons"></i></li></a>
                   
                    </ul>
                   
                </div>

                
            </div>
            <div class="row mt-3 text-white">
                <div class="col-md-6">
                    <div class="float-md-start footer_text">&copy 2022 Africa Speaks. All Rights Reserved</div>
                </div>
                <div class="col-md-6">
                    <p class="float-md-end footer_text">Designed and developed by <a href="#" class="text-decoration-none"><span class="
                        orangeColor">Calvary Studio</span></a> </p>
    
                </div>
            
                <!-- <p class="float-end">Designed and developed by <a href="#"><span>Calvary Studio</span></a> </p> -->
    
            </div>
        </div>
    </footer>
	
    <script src="<?php bloginfo('stylesheet_directory') ?>/assets/js/main.js"></script> 
    <script async src="https://static.addtoany.com/menu/page.js"></script>
    <script>
        jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
    </script>
   
</body>
</html>