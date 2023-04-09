<?php
$featuredimageurl = get_the_post_thumbnail_url();
?>

<header class="mb-5"  >


<div class="container-fluid  header-div" style="background-image: url('<?php echo $featuredimageurl?>');">

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="carousel-content">

        <?php the_custom_logo();   ?>
        <nav class="navbar ">
            <div class="container-fluid">
          
          

                <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                </button>
            
                <div class=" navbar-collapse navbarNav rounded collapse " id="main-menu">
                  <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                      'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-decoration-none header_ul header_ul_about_us %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                  ));
                  ?>
                </div>
            </div>
          </nav>
           
           


      </div>
      </div>

      <div class="col-md-8 position-relative" style="height:50vh;" >
        <div class=" text-white about_us_welcome_text">
          <!-- <h5 class="carousel_title about_us_title"><?php //echo wp_get_attachment_caption(get_post_thumbnail_id()); ?></h5> -->
          <h5 class="carousel_title about_us_title">Become part of the growing Africa Speaks Community.</h5>
          
          </div>
      </div>

    </div>
   
  </div>
  
</div>
 


  
 
 

</header>