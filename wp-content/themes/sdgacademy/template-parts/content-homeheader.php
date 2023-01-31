


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


    <!-- Africa Speaks -->
    

<!-- <header class="mb-5">
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
          > -->
            <?php $loop = new WP_Query(array('post_type'=>'slide', 'orderby'=>'post_id', 'order'=>'ASC')); ?>
            <?php
            while($loop->have_posts()) : $loop->the_post();  

            $slide_image = get_field('slide_image');
            $slide_title = get_field('slide_title');
            $slide_description = get_field('slide_description');
            ?>


              <!-- div 1 -->
              <!-- <div  class="header-div-home-img1" style="height: 100vh;padding: 0px; width: 100%; background-image: url('<?php echo $slide_image['url']; ?>')" data-cycle-title="<?php echo $slide_title; ?>" data-description="<?php echo $slide_description; ?>">

              </div>              -->
            <?php endwhile;wp_reset_query(); ?>
          <!-- </div> -->

          
       

          <!-- container div for header elements -->
          <!-- <div class="headerElementsContainer"> -->
          <?php //the_custom_logo();   ?>              <!-- <nav class="navbar navbar-expand-lg ">
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
                <!-- <nav class="navbar navbar-expand-lg ">
            <div class="container-fluid">
          
          

                <button class="navbar-toggler bg-white " type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                </button>
            
                <div class="collapse navbar-collapse navbarNavcollapsed   " id="main-menu"> -->
                  <?php
                  // wp_nav_menu(array(
                  //     'theme_location' => 'main-menu',
                  //     'container' => false,
                  //     'menu_class' => '',
                  //     'fallback_cb' => '__return_false',
                  //     // 'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
                  //     'items_wrap' => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-lg-0 text-white text-decoration-none header_ul header_ul_carousel header_ul_about_us %2$s">%3$s</ul>',
                  //     'depth' => 2,
                  //     'walker' => new bootstrap_5_wp_nav_menu_walker()
                  // ));
                  ?>
                <!-- </div>
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
          
          < carousel text -->
         
            <!-- <div class="carousel_text_div text-white"></div>               
               -->
           <!-- indicators div -->
           <!-- <div class="indicators-div"></div>
    </div>
    -->
     

<!-- </header> -->
