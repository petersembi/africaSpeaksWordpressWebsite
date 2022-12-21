

<header class="mb-5">
      <div class="container-fluid position-relative" style="padding: 0px;">

        

          <div class="cycle-slideshow" 
          data-cycle-fx="fade" 
          data-cycle-timeout="10000"
          data-cycle-slides="div"
          data-cycle-pager=".indicators-div"
          data-cycle-pager-template="<div class='heroIndicator'></div>"
          data-cycle-caption-template = " <h5 class='carousel_title carousel-text-home carousel-title-home   mb-2 '>{{title}}</h5><p class='carousel_text carousel-text-home'>{{description}}</p>"
          data-cycle-caption=".carousel_text_div"
          style="padding: 0px; width: 100%; height: 100vh"
          >
            <?php $loop = new WP_Query(array('post_type'=>'slide', 'orderby'=>'post_id', 'order'=>'ASC')); ?>
            <?php
            while($loop->have_posts()) : $loop->the_post();  

            $slide_image = get_field('slide_image');
            $slide_title = get_field('slide_title');
            $slide_description = get_field('slide_description');
            ?>


              <!-- div 1 -->
              <div  class="header-div-home-img1" style="height: 100vh;padding: 0px; width: 100%; background-image: url('<?php echo $slide_image['url']; ?>')" data-cycle-title="<?php echo $slide_title; ?>" data-description="<?php echo $slide_description; ?>">

              </div>             
            <?php endwhile;wp_reset_query(); ?>
          </div>

          
       

          <!-- container div for header elements -->
          <div class="headerElementsContainer">
          <?php the_custom_logo();   ?>              <!-- <nav class="navbar navbar-expand-lg ">
                  <div class="container-fluid">
                    
                    <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon "></span>
                    </button>
                    <div class="collapse navbar-collapse navbarNavcollapsed" id="navbarSupportedContent">
                      <ul class="navbar-nav me-auto mb-2 mb-lg-0">                                      
    
                        <ul class="  text-white text-decoration-none header_ul header_ul_carousel header_ul_about_us" style=" padding: 0px;" >
                          <a href="home.html" class=""><li class="list-group-item nav-item active">HOME</li></a>
                          <a href="about_us.html" class="about_us.html"><li class="list-group-item nav-item">ABOUT US</li></a>
                          <a href="membershipsignup.html" class=""><li class="list-group-item nav-item">DIRECTORY</li></a>
                          <a href="membership.html" class=""><li class="list-group-item nav-item">COMMUNITY</li></a>
                          <a href="" class=""><li class="list-group-item nav-item">CONTACT US</li></a>           
                                             
                        
                      </ul>
                      
                    </div>
                  </div>
                </nav> -->
                <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
          
          

                <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                </button>
            
                <div class="collapse navbar-collapse navbarNavcollapsed   " id="main-menu">
                  <?php
                  wp_nav_menu(array(
                      'theme_location' => 'main-menu',
                      'container' => false,
                      'menu_class' => '',
                      'fallback_cb' => '__return_false',
                      // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                      'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-decoration-none header_ul header_ul_carousel header_ul_about_us %2$s">%3$s</ul>',
                      'depth' => 2,
                      'walker' => new bootstrap_5_wp_nav_menu_walker()
                  ));
                  ?>
                </div>
            </div>
          </nav>
          </div>

          <div class="signindiv  ">
              <a class="btn btn-warning" style="font-weight: 400; float: right;" href="membershipsignup.html" ><b>Sign In</b></a>
              <ul class="navbar-nav pe-3" style="float:right;">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <b>LANGUAGES</b>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#"> <b>ENGLISH</b> </a></li>
                    <li><a class="dropdown-item" href="#"> <b>FRANCAIS</b> </a></li>
                    
                    <li><a class="dropdown-item" href="#">  <b>PORTUGUESE</b> </a></li>
                  </ul>
                </li>
              </ul>
             
          </div>
          
          <!-- carousel text -->
         
            <div class="carousel_text_div text-white"></div>               
              
           <!-- indicators div -->
           <div class="indicators-div"></div>
    </div>
  
     

</header>